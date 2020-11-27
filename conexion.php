<?php
$servername = "localhost";
$database = "mausoleo";
$username = "steven";
$password = "kevin123";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Conexion fallida: " . mysqli_connect_error());
}
echo "Conexion exitosa";

?>