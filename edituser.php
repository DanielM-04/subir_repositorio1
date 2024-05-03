<?php 
include('conexion.php');
$con=conectar();

$id = $_POST["id"];
$cedula=$_POST["cedula"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$ciudad=$_POST["ciudad"];

$sql = "UPDATE info SET cedula='$cedula', nombre='$nombre', apellido='$apellido', ciudad='$ciudad' WHERE id='$id'";
$query=mysqli_query($con,$sql);

if ($query){
   Header("Location: ind.php");
};
?>