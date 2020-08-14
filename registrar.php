<?php
    include './conexion.php';

    $sql="INSERT INTO `usuario` (`ID_Usuario`, `Nombres`, `Apellidos`, `Telefono`, `Calle`, `Numero ext`, `Numero int`, `Colonia`, `codigo postal`, `Ciudad`, `Estado`, `correo`, `password`) VALUES (
                        NULL, 
                        '".$_POST['Nombres']."', 
                        '".$_POST['Apellidos']."', 
                        '".$_POST['Telefono']."', 
                        '".$_POST['Calle']."', 
                        '".$_POST['Ext']."', 
                        '".$_POST['Int']."', 
                        '".$_POST['Colonia']."', 
                        '".$_POST['CP']."', 
                        '".$_POST['Ciudad']."', 
                        '".$_POST['Estado']."', 
                        '".$_POST['Correo']."', 
                        '".$_POST['Password']."'
                        );";
    mysqli_query($con,$sql);
    header('Location: ./index.php');
?>