<?php
    include './conexion.php';
    $id=$_POST['Id'];
    $guia=$_POST['Guia'];
    $paqueteria=$_POST['Paqueteria'];

    $sql="UPDATE `compras` SET `Envio` = 'LISTO', `Paqueteria` = '".$paqueteria."', `Guia` = '".$guia."' WHERE `compras`.`id_venta` = ".$id.";";

    mysqli_query($con,$sql)or die(mysqli_error($con));

    
    header("Location: admin.php");
?>