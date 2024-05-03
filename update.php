<?php
include('conexion.php');
$con = conectar();

$id=$_GET['id'];
$sql = "SELECT * FROM info WHERE id='$id'";
$query = mysqli_query($con,$sql);
$row=mysqli_fetch_array($query)

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Datos</title>
</head>
<body>

    <form action="edituser.php" method="POST">
        <input type="hidden" name="id" value ="<?= $row['id'] ?>">
    <p> Cedula:<input type="text" name="cedula" placeholder="Digite su cédula" maxlength="10" value ="<?= $row['cedula'] ?>"> </p></p>
    <p>Nombre: <input type="text" name="nombre" placeholder="Digite su Nombre" value ="<?= $row['nombre'] ?> "> </p>
    <p>Apellido: <input type="text" name="apellido" placeholder="Digite su Apellido" value ="<?= $row['apellido'] ?> "> </p>
    <p>Ciudad: <input type="text" name="ciudad" placeholder="Digite la Ciudad" value ="<?= $row['ciudad'] ?>"> </p>
    <input type="submit" value="Editar">

    </form>
    
</body>

</html>
