<?php

include("conexion.php");
$con=conectar();

$cedula=$_GET['id'];

$sql="DELETE FROM alumno  WHERE cedula='$cedula'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: persona.php");
    }
?>
