<?php
session_start();
	include "conexion.php";
	if(isset($_SESSION['Admin'])){

	}else{
		header("Location: ./index.php?Error=Acceso denegado");
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Panel de Administración</title>
	<link rel="stylesheet" type="text/css" href="./css/estilo.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
<?php
include './admin/navbar.php';
?>
	

	<center><h1>Últimas Compras</h1></center>
	<center>
	<table border="0px" width="90%">	
		

		<?php
			$re=mysqli_query($con,$f="SELECT * FROM `compras` ORDER BY `compras`.`numeroventa` DESC");
			$numeroventa=0;
			$idUsuario="";
			$Fecha="";
			while ($f=mysqli_fetch_array($re)) {
					
					echo '<tr style="background-color: black;color:white;"><td >Compra Número: '.$f['numeroventa'].' </td>';	
					echo '<td>ID_Usuario: <a href="usuarios.php?ID='.$f['ID_Usuario'].'"target="_blank">'.$f['ID_Usuario'].'</a> </td>';	
					echo '<td>Fecha: '.$f['Fecha'].'</td></tr>';
								
					$numeroventa=$f['numeroventa'];
					$idUsuario = $f['ID_Usuario'];
					$Fecha = $f['Fecha'];

					echo '<tr style="background-color:#e57c0b;">
						<td>Id_Producto</td>
						<td>Imagen</td>
						<td>Nombre</td>
						<td>Precio</td>
						<td>Cantidad</td>
						<td>Subtotal</td>
						<td>Envio</td>
						<td>Paqueteria</td>
						<td>No_GUIA</td>
					</tr>	
					
					<tr style="background-color:white;color:black;">
						<td><a href="detallesProductoAdmin.php?id='.$f['Id'].'" target="_blank">'.$f['Id'].'</a></td>
						<td><img src="./productos/'.$f['imagen'].'" width="100px" heigth="100px" /></td>
						<td>'.$f['nombre'].'</td>
						<td>'.$f['precio'].'</td>
						<td>'.$f['cantidad'].'</td>
						<td>'.$f['subtotal'].'</td>';
						
						if($f['Envio']=="LISTO"){
							echo '<td style="background-color:green;">LISTO</td>';
							echo '<td>'.$f['Paqueteria'].'</td>';
							echo '<td>'.$f['Guia'].'</td>';


						}
						else{
							echo '<td><a href="enviar.php?id='.$f['id_venta'].'">ENVIAR</a></td>';
							echo '<td>N/A</td>';
							echo '<td>N/A</td>';
						}

					echo '</tr>';
			}
		?>
	</table>
	</center>
	</section>
</body>
</html>