<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/estilo.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>
	<!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
	<?php
		session_start();
		include 'navar.php';
		include 'conexion.php';
		$re=mysqli_query($con,$f="select * from producto where Id=".$_GET['id'])or die(mysqli_error());
		while ($f=mysqli_fetch_array($re)) {
		?>
			
			<div class="card" id="card_detalles">
		<div class="container">
		  <div class="row">
		    <div class="col">		

				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="./Productos/<?php echo $f['img1'];?>" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="./Productos/<?php echo $f['img2'];?>" alt="Second slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="./Productos/<?php echo $f['img3'];?>" alt="Third slide">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
			</div>
			<div class="col">
			  <div class="card-body">
			    <h5 class="card-title"><?php echo $f['Nombre'];?></h5>
			    <p class="card-text" id="precio">$<?php echo $f['Precio'];?>MXN</p>
			    <a href="carritodecompras.php?id=<?php echo $f['Id'];?>" class="btn btn-primary" style="background-color: #ff7802; border-color: #ff7802;">Añadir al carrito</a>
			    <hr>
			    <?php echo $f['Descripcion'];?>

			  </div>
			 </div>
			</div>
		</div>
	</div>
		
	<?php
		}
	?>
		
		

		
	</section>
</body>
</html>