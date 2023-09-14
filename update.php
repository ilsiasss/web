<?php

include("conexion.php");
$con=conectar();

$cod_persona=$_POST['cod_persona'];
$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$Fecha_Nacimiento=$_POST['Fecha_Nacimiento'];
$Genero=$_POST['Genero'];
$Direccion=$_POST['Direccion'];
$Estado_Civil=$_POST['Estado_Civil'];

$sql="UPDATE persona SET  dni='$dni',nombres='$nombres',apellidos='$apellidos',Fecha_Nacimiento='$Fecha_Nacimiento',Genero='$Genero',Direccion='$Direccion',Estado_Civil='$Estado_Civil' WHERE cod_persona='$cod_persona'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>