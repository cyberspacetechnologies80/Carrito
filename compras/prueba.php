<?php
session_start();
include "../conexion.php";
$arreglo=$_SESSION['carrito'];
$numeroventa=0;
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
                                1, 
                                'N/A', 
                                'N/A', 
                                'N/A', 
                                '2020-05-22')";



    

    mysqli_query($con,$sql)or die(mysqli_error($con));
        
}
?>