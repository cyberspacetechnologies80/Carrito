<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear cuenta-Dropstore</title>

      <!-- Bootstrap -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript"  src="./js/scripts.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  </head>
  <body>
   <?php 
        include './navar.php';
   ?>

    <div class="jumbotron jumbotron-fluid text-center">
      <h1 class="display-4">Registrarse</h1>
      <p class="lead">Es gratis, no hay cobro por registrarte</p>
    </div>
    
    <div class="container" style="width: 50%;">
      <form class="col-xl-12" action="registrar.php" method="POST">
        <div class="form-group">
          <label for="exampleInputEmail1">Nombres</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="Nombres" style="width: 100%">
        </div>
          <label for="exampleInputEmail1">Apellidos</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter last name" name="Apellidos" style="width: 100%">
        <div class="form-group">
          <label for="exampleInputEmail1">Correo electronico</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="Correo"style="width: 100%">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Telefono</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="Telefono" style="width: 100%">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter password" name="Password" style="width: 100%;">
        </div>
        
        <div class="form-group">
          <label for="exampleInputEmail1">Calle</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="Calle" style="width: 100%">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">No.ext</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="Ext" style="width: 100%">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">No.int</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="Int" style="width: 100%">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Colonia</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="Colonia" style="width: 100%">
        </div>  
        <div class="form-group">
          <label for="exampleInputEmail1">Codigo Postal</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="CP" style="width: 100%">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Ciudad</label>
          <input type="text" class="form-control" id="exampleInputEmail1"  name="Ciudad" style="width: 100%">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Estado</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="Estado"style="width: 100%">
        </div>
          <button type="submit" class="btn btn-primary" style="background-color: #ff7802; border-color: #ff7802; width:100%;"> Crear cuenta</button>
        </div>
      </form>
      <hr>
    </div>
    
    <br>
    <br>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="../js/jquery-3.3.1.min.js"></script>

      <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.js"></script>
  </body>
</html>
