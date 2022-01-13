<?php
include("conexion.php");
$con=conectar();

$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];


$sql="INSERT INTO alumno VALUES('$cedula','$nombre','$correo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: persona.php");
    
}else {
}
?>