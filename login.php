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
	<div class="jumbotron jumbotron-fluid text-center">
      <h1 class="display-4">CyberSpace CMS</h1>
      <p class="lead">Inicia sesion para Administrar la pagina</p>
</div>
  
    <div class="container" style="width: 50%; float left;">
      <form class="col-xl-12" action="./login/verificar.php" method="POST">
        <div class="form-group">
          <label for="exampleInputEmail1">Correo electronico</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" style="width: 100%" name="Admin">
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter password" style="width: 100%;" name="Password">
        </div>
        <div class="form-check"> </div>
        <center><button type="submit" class="btn btn-primary" style="background-color: #75a2bf; border-color: #75a2bf;"> Iniciar sesión</button></center>
        <div class="row" style="float: right;"> </div>
        <?php 
		if(isset($_GET['error'])){
			echo '<br><center><p style="color:red;">Datos no validos, comunicate con nuestro departamento de soporte<p></center>';
		}
		?>
</body>
</html>