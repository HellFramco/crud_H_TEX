<?php

include("conexion.php");
$con=conectar();

$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];

$sql="UPDATE alumno SET  nombre='$nombre',correo='$correo' WHERE cedula='$cedula'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: persona.php");
    }
?>