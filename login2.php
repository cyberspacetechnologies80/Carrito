<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar sesión- Dropstore</title>

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
      include 'navar.php';
    ?>
  <div class="jumbotron jumbotron-fluid text-center">
      <h1 class="display-4">Iniciar sesión</h1>
      <p class="lead">Para poder realizar la compra necesitas iniciar sesion</p>
</div>
  
    <div class="container" style="width: 50%; float left;">
      <form class="col-xl-12" action="./login/verificar2.php" method="POST">
        <div class="form-group">
          <label for="exampleInputEmail1">Correo electronico</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" style="width: 100%" name="correo">
          <small id="emailHelp1" class="form-text text-muted">No compartiremos esta informacion con nadie.</small></div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter password" style="width: 100%;" name="password">
        </div>
        <div class="form-check"> </div>
        <center><button type="submit" class="btn btn-primary" style="background-color: #ff7802; border-color: #ff7802;"> Iniciar sesión</button></center>
        <div class="row" style="float: right;"> </div>
        <?php 
          if(isset($_GET['error'])){
            echo '<br><center><p style="color:red;">Datos no correctos, verifica bien tu contraseña o correo<p></center>';
          }
        ?>
      </form>
      <hr>
      <center><p>Si no tienes una cuenta <a href="./registro.php">crea una</a></p></center>
    </div>
    
      <br>
      <br>

  </body>
</html>
