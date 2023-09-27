<?php
//recibir la informacion

$dni=$_POST['dni'];
$ape_nom=$_POST['ape_nom'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$fecha_naci=$_POST['fecha_naci'];

//mostrar la informacion

echo $dni."<br>";
echo $ape_nom."<br>";
echo $correo."<br>";
echo $telefono."<br>";
echo $direccion."<br>";
echo $fecha_naci."<br>";

?>