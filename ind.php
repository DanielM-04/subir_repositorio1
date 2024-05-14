<?php
include('conexion.php');
$con = conectar();
$select = "SELECT * FROM info";
$query=mysqli_query($con,$select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilos.css">   
    <title>Formulario</title>
</head>
<body>
   <div class="container">
   <div class="formulario">
        
        <form action="usuarios.php" method="POST">
        Cedula: <input type="text" name="cedula" placeholder="Digite su cédula" maxlength="10" required> </p>
        <p>Nombre: <input type="text" name="nombre" placeholder="Digite su Nombre" required> </p>
        <p>Apellido: <input type="text" name="apellido" placeholder="Digite su Apellido" required> </p>
        <p>Ciudad: <input type="text" name="ciudad" placeholder="Digite la Ciudad" required> </p>
        <input type="submit" value="INGRESAR">
    
        </form>
        </div>
        
        <div class="tabla">
        <table>
            <thead>
                <tr>
                    <th>Cédula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Ciudad</th>
                    
                </tr>
            </thead>
            <?php while($row=mysqli_fetch_array($query)):?>
            <tbody>
            <tr>
                <td><?=$row['cedula'] ?></td>
                <td><?=$row['nombre'] ?></td>
                <td><?=$row['apellido'] ?></td>
                <td><?=$row['ciudad'] ?></td>
                <td class="no-border"><a href="update.php?id=<?=$row['id'] ?>"><img src="imagenes/im1.jpg" alt="editar" class="editar"></a></td>
                <td class="no-border"><a href="eliminar.php?id=<?=$row['id'] ?>"><img src="imagenes/bor.png" alt="borrar" class="editar"></a></td>
            </tr>
            <?php endwhile;?>
            </tbody>
        </table>
        </div>
        
   </div>
</body>

</html>
