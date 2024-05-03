<?php
function conectar(){
    
$host = "localhost";
$user = "root";
$pass = "";
$bd = "usuarios";
$conectar=mysqli_connect($host,$user,$pass,$bd);
return $conectar;
}


?>