<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>Dropstore</title>
	<link rel="stylesheet" type="text/css" href="./css/estilo.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
	
	<?php
		session_start();
		include 'navar.php'
	?>
	<!-- Categorias -->
	<div class="btn-group" role="group" aria-label="Button group with nested dropdown" id="categoria">
		<div class="btn-group" role="group">
			<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Categorias
			</button>
			<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
				<em><a class="dropdown-item" href="#">Electronica</a>
				<a class="dropdown-item" href="#">Hogar</a>
				<a class="dropdown-item" href="#">Herramientas</a>
				<a class="dropdown-item" href="#">Entretenimiento</a>
				<a class="dropdown-item" href="#">Juguetes</a>
				<a class="dropdown-item" href="#">Ropa</a>
				</em>
			</div>
		</div>
	</div>
<br>
<br>
	<article class="container-fluid">
		<!-- Carrusel -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./carrusel/GT10.jpg" alt="GT08" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./carrusel/xiaomi redmi 6.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./carrusel/amdryzen5.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	<?php
	
		include 'conexion.php';
		$re=mysqli_query($con,$f="select * from producto")or die(mysql_error());
		while ($f=mysqli_fetch_array($re)) {
		?>
			<div class="producto">
				<div class="card" >
				<img class="card-img-top" src="./Productos/<?php echo $f['img1'];?>" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title"><?php echo $f['Nombre'];?></h5>
					<p class="card-text" id="precio">$<?php echo $f['Precio'];?> MXN</p>
					<a href="./detalles.php?id=<?php echo $f['Id'];?>" class="btn btn-primary" style="background-color: #ff7802; border-color: #ff7802;width:100%;">Ver producto</a>
				</div>
				</div>
		</div>
	<?php
		}
	?>	
	</article>
</body>
</html>