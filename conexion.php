<?php
	$host="localhost";
	$user="root";
	$password="";
	$db="dropshop";

	$con=mysqli_connect($host,$user,$password)or die("conexion fallida");

	$sdb=mysqli_select_db($con,$db)or die("la base de datos no existe");
?>