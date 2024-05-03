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
    <title>Formulario</title>
</head>
<body>
    
    <form action="usuarios.php" method="POST">
    Cedula: <input type="text" name="cedula" placeholder="Digite su cédula" maxlength="10" required> </p>
    <p>Nombre: <input type="text" name="nombre" placeholder="Digite su Nombre" required> </p>
    <p>Apellido: <input type="text" name="apellido" placeholder="Digite su Apellido" required> </p>
    <p>Ciudad: <input type="text" name="ciudad" placeholder="Digite la Ciudad" required> </p>
    <input type="submit" value="ingresar">

    </form>
    
    <div class="tabla">
    <table>
        <thead>
            <tr>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Ciudad</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <?php while($row=mysqli_fetch_array($query)):?>
        <tbody>
            <th> <?=$row['cedula'] ?></th>
            <th> <?=$row['nombre'] ?></th>
            <th> <?=$row['apellido'] ?></th>
            <th> <?=$row['ciudad'] ?></th>
            <th></th>
            <th><a href="update.php?id=<?=$row['id'] ?>">Editar</a></th>
            <th><a href="eliminar.php?id=<?=$row['id'] ?>">Eliminar</a></th>
        <?php endwhile;?>
        </tbody>
    </table>
    </div>
    
</body>

</html>
