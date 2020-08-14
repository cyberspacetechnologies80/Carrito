<?php
session_start();
include "../conexion.php";
$re=mysqli_query($con,$f="select * from admin where correo='".$_POST['Admin']."' AND 
 					password='".$_POST['Password']."'")	or die(mysqli_error());
	while ($f=mysqli_fetch_array($re)) {
		$arreglo[]=array('Nombre'=>$f['nombre'],
			'Apellido'=>$f['apellido'],'Imagen'=>$f['imagen']);
	}
	if(isset($arreglo)){
		$_SESSION['Admin']=$arreglo;
		header("Location: ../admin.php");
	}else{
		header("Location: ../login.php?error=datos no validos");
	}
?>