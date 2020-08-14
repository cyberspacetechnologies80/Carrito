<?php
    include 'conexion.php';

    //Datos importantes

    $id_user;
    $id_prod;
    $id_venta=$_GET['id'];
?>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Datos para el envio</title>
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

        $sql="SELECT * FROM compras WHERE id_venta=".$id_venta;

        $re=mysqli_query($con,$sql) or die(mysqli_error($con));

        while($f=mysqli_fetch_array($re)){
    ?>
    <h3>Id de venta: <?php echo $f['id_venta'];?></h3>
    <h3>Numero venta: <?php echo $f['numeroventa'];?></h3>
    <?php
        $id_prod=$f['Id'];
        $id_user=$f['ID_Usuario'];

        $sql_prod="SELECT * FROM producto WHERE Id=".$id_prod;

        $re_prod=mysqli_query($con,$sql_prod) or die(mysqli_error($con));

        while($fp=mysqli_fetch_array($re_prod)){

    ?>
    
    <fieldset>
        <legend>Datos del producto</legend>
            <img src="./productos/"width="300px">
            <p><b>Nombre: </b><?php echo $fp['Nombre'];?></p>
            <p><b>Precio: </b><?php echo $fp['Precio'];?></p>
            <p><b>Cantidad: </b><?php echo $f['cantidad'];?></p>
            <p><b>Subtotal: </b><?php echo $f['subtotal'];?></p>
            <p><b>Proveedor: </b><a href="<?php echo $fp['Proveedor'];?>"><?php echo $fp['Proveedor'];?></a></p>
    </fieldset>
    <?php
        }
        $sql_us="SELECT * FROM usuario WHERE ID_Usuario=".$id_user;

        $re_us=mysqli_query($con,$sql_us) or die(mysqli_error($con));
        
        while($fu=mysqli_fetch_array($re_us)){
    ?>
    <br>
    <fieldset>
        <legend>Datos del cliente</legend>
        <p><b>Id de usuario: </b><?php echo $fu['ID_Usuario'];?></p>
            <p><b>Nombre: </b><?php echo $fu['Nombres'];?></p>
            <p><b>Apellido: </b><?php echo $fu['Apellidos'];?></p>
            <p><b>Telefono: </b><?php echo $fu['Telefono'];?></p>
            <p><b>Correo: </b><?php echo $fu['correo'];?></p>
            <p><b>Calle: </b><?php echo $fu['Calle'];?></p>
            <p><b>Numero ext: </b><?php echo $fu['Numero ext'];?></p>
            <p><b>Numero int: </b><?php echo $fu['Numero int'];?></p>
            <p><b>Colonia: </b><?php echo $fu['Colonia'];?></p>
            <p><b>Codigo Postal: </b><?php echo $fu['codigo postal'];?></p>
            <p><b>Ciudad: </b><?php echo $fu['Ciudad'];?></p>
            <p><b>Estado: </b><?php echo $fu['Estado'];?></p>
            
    </fieldset>
    <?php
        }
        }
    ?>
    <br>
    <fieldset>
        <legend>Datos de envio</legend>
        <form action="./envio.php" method="POST">
           
            <input type="hidden" value="<?php echo $id_venta;?>"name="Id">
            <br>
            <label>Paqueteria</label>
            <input type="text" placeholder="Coloca el no. de guia" name="Paqueteria">
            <br>
            <label>No.Guia</label>
            <input type="text" placeholder="Coloca el no. de guia" name="Guia">
            <br>
            <input type="submit" value="Listo">
        </form>
    </fieldset>
</body>
</html>