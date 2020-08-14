<?php
session_start();
include "../conexion.php";
$arreglo=$_SESSION['carrito'];
$usuario=$_SESSION['Usuario'];
$user;
$numeroventa=0;
$fecha=date("Y-m-d");
$f="select * from compras order by numeroventa DESC limit 1";
$re=mysqli_query($con,$f) or die(mysqli_error($con));

while ($f=mysqli_fetch_array($re)) {
    $numeroventa=$f['numeroventa'];	
}
if($numeroventa==0){
    $numeroventa=1;
}else{
    $numeroventa=$numeroventa+1;
}
for($i=0;$i<count($usuario);$i++){
	$user=$usuario[$i]['Id'];
}
for($i=0; $i<count($arreglo);$i++){

    $sql="insert into compras (id_venta,Id,numeroventa, imagen, nombre, precio, cantidad, subtotal, ID_Usuario, Envio, Paqueteria, Guia, Fecha) values (
                                null, 
                                '".$arreglo[$i]['Id']."', 
                                '".$numeroventa."',
                                '".$arreglo[$i]['Imagen']."', 
                                '".$arreglo[$i]['Nombre']."', 
                                '".$arreglo[$i]['Precio']."', 
                                '".$arreglo[$i]['Cantidad']."', 
                                '".($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad'])."', 
                                ".$user.", 
                                'N/A', 
                                'N/A', 
                                'N/A', 
                                '".$fecha."')";



    

    mysqli_query($con,$sql)or die(mysqli_error($con));
        
}
		
		/*
		$total=0;
		$tabla='<table border="1">
			<tr>
			<th>Nombre</th>
			<th>Cantidad</th>
			<th>Precio</th>
			<th>Subtotal</th>
			</tr>';
		for($i=0;$i<count($arreglo);$i++){
			$tabla=$tabla.'<tr>
				<td>'.$arreglo[$i]['Nombre'].'</td>
				<td>'.$arreglo[$i]['Cantidad'].'</td>
				<td>'.$arreglo[$i]['Precio'].'</td>
				<td>'.$arreglo[$i]['Cantidad']*$arreglo[$i]['Precio'].'</td>
				</tr>
			';
			$total=$total+($arreglo[$i]['Cantidad']*$arreglo[$i]['Precio']);
		}
		$tabla=$tabla.'</table>';
		//echo $tabla;
		$nombre="Luis Alberto Grijalva";
		$fecha=date("d-m-Y");
		$hora=date("H:i:s");
		$asunto="Compra en X dominio";
		$desde="www.tupagina.com";
		$correo="carlos.perez10_06_00@hotmail.com";
		$comentario='
			<div style="
				border:1px solid #d6d2d2;
				border-radius:5px;
				padding:10px;
				width:800px;
				heigth:300px;
			">
			<center>
				<img src="https://yt4.ggpht.com/-3eVnkBJn2y4/AAAAAAAAAAI/AAAAAAAAAAA/hAqolVRolHc/s48-c-k-no/photo.jpg" width="300px" heigth="250px">
				<h1>Muchas gracias por comprar en mi carrito de compras</h1>
			</center>
			<p>Hola '.$nombre.' muchas gracias por comprar aquí te mando los detalles de tu compra</p>
			<p>Lista de Artículos<br>
				'.$tabla.'
				<br>
				Total del pago es: '.$total.'

			</p>
			</div>

		';

		//echo $comentario;
		$headers="MIME-Version: 1.0\r\n";
		$headers.="Content-type: text/html; charset=utf8\r\n";
		$headers.="From: Remitente\r\n";
		mail($correo,$asunto,$comentario,$headers);
		//unset($_SESSION['carrito']);
		//header("Location: ../admin.php");*/
?>