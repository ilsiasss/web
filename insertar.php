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



$sql="INSERT INTO persona VALUES('$cod_persona','$dni','$nombres','$apellidos','$Fecha_Nacimiento','$Genero','$Direccion','$Estado_Civil')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>