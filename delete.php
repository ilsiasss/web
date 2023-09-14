<?php

include("conexion.php");
$con=conectar();

$cod_persona=$_GET['id'];

$sql="DELETE FROM persona  WHERE cod_persona='$cod_persona'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>
