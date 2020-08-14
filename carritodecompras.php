<?php
	session_start();
	include './conexion.php';
	if(isset($_SESSION['carrito'])){
		if(isset($_GET['id'])){
					$arreglo=$_SESSION['carrito'];
					$encontro=false;
					$numero=0;
					for($i=0;$i<count($arreglo);$i++){
						if($arreglo[$i]['Id']==$_GET['id']){
							$encontro=true;
							$numero=$i;
						}
					}
					if($encontro==true){
						$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
						$_SESSION['carrito']=$arreglo;
					}else{
						$nombre="";
						$precio=0;
						$imagen="";
						$re=mysqli_query($con,$f="select * from producto where Id=".$_GET['id']);
						while ($f=mysqli_fetch_array($re)) {
							$nombre=$f['Nombre'];
							$precio=$f['Precio'];
							$imagen=$f['img1'];
						}
						$datosNuevos=array('Id'=>$_GET['id'],
										'Nombre'=>$nombre,
										'Precio'=>$precio,
										'Imagen'=>$imagen,
										'Cantidad'=>1);

						array_push($arreglo, $datosNuevos);
						$_SESSION['carrito']=$arreglo;

					}
		}




	}else{
		if(isset($_GET['id'])){
			$nombre="";
			$precio=0;
			$imagen="";
			$re=mysqli_query($con,$f="select * from producto where Id=".$_GET['id']);
			while ($f=mysqli_fetch_array($re)) {
				$nombre=$f['Nombre'];
				$precio=$f['Precio'];
				$imagen=$f['img1'];
			}
			$arreglo[]=array('Id'=>$_GET['id'],
							'Nombre'=>$nombre,
							'Precio'=>$precio,
							'Imagen'=>$imagen,
							'Cantidad'=>1);
			$_SESSION['carrito']=$arreglo;
		}
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/estilo.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  src="./js/scripts.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
	<?php
		include './navar.php';
	?>
	<section>
		<?php
			$total=0;
			if(isset($_SESSION['carrito'])){
			$datos=$_SESSION['carrito'];
			
			$total=0;
			for($i=0;$i<count($datos);$i++){
				
	?>
				<div class="producto">
					<div class="card" style="width: 18rem; display:inline-block; margin:7px;" style="margin-right: 3px; margin-top: 3px;
						">
						<img class="card-img-top" src="./Productos/<?php echo $datos[$i]['Imagen'];?>" alt="Card image cap">
						<div class="card-body">
							<span><h5 class="card-title"><?php echo $datos[$i]['Nombre'];?></h5></span><br>
							</span><p class="card-text" style="color: #4aa31a;">$<?php echo $datos[$i]['Precio'];?> MXN</p></span><br>
							<span>Cantidad 
								<input type="number" value="<?php echo $datos[$i]['Cantidad'];?>"
								data-precio="<?php echo $datos[$i]['Precio'];?>"
								data-id="<?php echo $datos[$i]['Id'];?>"
								class="cantidad"></span><br>
							<span>Subtotal: $<span style="color: green;" class="subtotal"><?php echo $datos[$i]['Cantidad'] *$datos[$i]['Precio'];?></span>MXN</span>
							<br>
							<br>	
							<center><a href="#" class="eliminar" data-id="<?php echo $datos[$i]['Id']?>">Eliminar</a></center>
						</div>
					</div>
				</div>
			<?php
				$total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
			}
			echo '<br>';
			}else{
				echo '<center><h2>No has añadido ningun producto</h2></center>';
			}
			echo '<br><section style="width: 100%; float:left"><center><h2>Total:<span id="total"> '.$total.'</span></h2></center>';
			if($total!=0){
					//echo '<center><a href="./compras/compras.php" class="aceptar">Comprar</a></center>';
					if(isset($_SESSION['Usuario'])){
			?>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="formulario">
					<input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="upload" value="1">
					<input type="hidden" name="business" value="cglblue@hotmail.com">
					<input type="hidden" name="currency_code" value="MXN">
					
					<?php 
						for($i=0;$i<count($datos);$i++){
					?>
						<input type="hidden" name="item_name_<?php echo $i+1;?>" value="<?php echo $datos[$i]['Nombre'];?>">
						<input type="hidden" name="amount_<?php echo $i+1;?>" value="<?php echo $datos[$i]['Precio'];?>">
						<input	type="hidden" name="quantity_<?php echo $i+1;?>" value="<?php echo $datos[$i]['Cantidad'];?>">	
					<?php 
						}
					?>
						

					<center><input type="submit" value="comprar" class="aceptar" style="width:200px"></center>
			</form>
			<?php
					}
					else{
						?>
						<center>
							<h4>Para comprar, necesitas iniciar sesión<h4>
							<a href="./login2.php" class="btn btn-primary" style="background-color: #ff7802; border-color: #ff7802;width:300px;">Iniciar sesión</a>
						</center>
						<?php
					}
			}
			
		?>
		<center><a href="./">Ver catalogo</a></center></section>

		
	</section>
</body>
</html>