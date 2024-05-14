<?php
include('conexion.php');
$con = conectar();

$id=$_GET['id'];
$sql = "SELECT * FROM info WHERE id='$id'";
$query = mysqli_query($con,$sql);
$row=mysqli_fetch_array($query)

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #acacac96;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Contenedor principal */
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 300px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        /* Estilo para el formulario */
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 100%;
        }


        form input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
            width: 100%;
            box-sizing: border-box;
        }

        form input[type="submit"] {
            padding: 10px;
            border: none;
            border-radius: 10px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="edituser.php" method="POST">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <p>Cédula: <input type="text" name="cedula" placeholder="Digite su cédula" maxlength="10" value="<?= $row['cedula'] ?>"></p>
            <p>Nombre: <input type="text" name="nombre" placeholder="Digite su Nombre" value="<?= $row['nombre'] ?>"></p>
            <p>Apellido: <input type="text" name="apellido" placeholder="Digite su Apellido" value="<?= $row['apellido'] ?>"></p>
            <p>Ciudad: <input type="text" name="ciudad" placeholder="Digite la Ciudad" value="<?= $row['ciudad'] ?>"></p>
            <input type="submit" value="EDITAR">
        </form>
    </div>
</body>
</html>

