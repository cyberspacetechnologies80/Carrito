<?php
session_start();
include "../conexion.php";
$re=mysqli_query($con,$f="select * from usuario where correo='".$_POST['correo']."' AND 
 					password='".$_POST['password']."'")	or die(mysqli_error($con));
	while ($f=mysqli_fetch_array($re)) {
		$usuario[]=array('Id'=>$f['ID_Usuario'],'Nombre'=>$f['Nombres'],
			'Apellidos'=>$f['Apellidos']);
	}
	if(isset($usuario)){
		$_SESSION['Usuario']=$usuario;
		header("Location: ../carritodecompras.php");


	}else{
		header("Location: ../login2.php?error=datos no validos");
	}
?>