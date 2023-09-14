<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM persona WHERE cod_persona='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="cod_persona" value="<?php echo $row['cod_persona']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="dni" placeholder="Dni" value="<?php echo $row['dni']  ?>">
                                <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres" value="<?php echo $row['nombres']  ?>">
                                <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos']  ?>">
                                <input type="text" class="form-control mb-3" name="Fecha_Nacimiento" placeholder="fecha_Nacimiento" value="<?php echo $row['Fecha_Nacimiento']  ?>">
                                <input type="text" class="form-control mb-3" name="Genero" placeholder="genero" value="<?php echo $row['Genero']  ?>">
                                <input type="text" class="form-control mb-3" name="Direccion" placeholder="direccion" value="<?php echo $row['Direccion']  ?>">
                                <input type="text" class="form-control mb-3" name="Estado_Civil" placeholder="estado_Civil" value="<?php echo $row['Estado_Civil']  ?>">

                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>