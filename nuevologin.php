<?php
//conexion a la base de datos

include ("../proyecto final pw/conexion.php");
$email = $_POST['email'];
$password = $_POST['password'];


$consulta = "INSERT INTO login (email, password) VALUES ('$email', '$password')";
if (mysqli_query ($conn, $consulta)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $consulta . "<br>" . mysqli_error($conn);
}
$conn->close();;
?>