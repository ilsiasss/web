<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM persona";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ALUMNO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="cod_persona" placeholder="cod persona">
                                    <input type="text" class="form-control mb-3" name="dni" placeholder="DPI">
                                    <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
                                    <input type="text" class="form-control mb-3" name="Fecha_Nacimiento" placeholder="Fecha_Nacimiento">
                                    <input type="text" class="form-control mb-3" name="Genero" placeholder="Genero">
                                    <input type="text" class="form-control mb-3" name="Direccion" placeholder="Direccion">
                                    <input type="text" class="form-control mb-3" name="Estado_Civil" placeholder="Estado_Civil">
                                    
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>                  
                                        <th>Dni</th>                   
                                        <th>Nombres</th>                      
                                        <th>Apellidos</th>                     
                                        <th>Fecha_Nacimiento</th>                     
                                        <th>Genero</th>               
                                        <th>Direccion</th>                                    
                                        <th>Estado_Civil</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['cod_persona']?></th>
                                                <th><?php  echo $row['dni']?></th>
                                                <th><?php  echo $row['nombres']?></th>
                                                <th><?php  echo $row['apellidos']?></th>    
                                                <th><?php  echo $row['Fecha_Nacimiento']?></th>  
                                                <th><?php  echo $row['Genero']?></th>  
                                                <th><?php  echo $row['Direccion']?></th>  
                                                <th><?php  echo $row['Estado_Civil']?></th>   
                                                <th><a href="actualizar.php?id=<?php echo $row['cod_persona'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['cod_persona'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>