<?php
include("../include/conexion.php");
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

$consulta="INSERT INTO usuario(dni, apellidos_nombres, correo, telefono, direccion, fecha_nacimiento, password, activo, reset_password, token_password)
VALUES ('$dni', '$ape_nom', '$correo', '$telefono', '$direccion', '$fecha_naci', '$dni',1,0,'')";

$ejecutar= mysqli_query($conexion, $consulta);

if ($ejecutar) {
    echo "Registro Exitoso";
}else {
    echo "Registro Fallido";
}

?>