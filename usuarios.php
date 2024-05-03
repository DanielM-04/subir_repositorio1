<?php 
include('conexion.php');
$con=conectar();
$id = null;
$cedula=$_POST["cedula"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$ciudad=$_POST["ciudad"];

$sql="INSERT INTO info(id,cedula,nombre,apellido,ciudad) VALUES ('$id','$cedula','$nombre','$apellido','$ciudad')";
$query=mysqli_query($con,$sql);

if ($query){
   Header("Location: ind.php");
};
?>