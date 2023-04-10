<?php
$servername = "localhost";
$database = "basededatos";
$username = "root";
$password = "";
// Creamos la conexion
$conn = mysqli_connect($servername, $username, $password, $database);
// Se chequea la conexion
if (!$conn) {
      die("Conexion fallida: " . mysqli_connect_error());
}
 
echo "!Conexión completada con exito!";

//Se crea las variables y se les asigna cada una su respectivo valor adquirido del html
//estoy recibiendo los datos del formulario 
$USUARIO=$_POST['usuario'];
$CLAVE=$_POST['password'];
$NOMBRES=$_POST['nombres'];
$APELLIDOS=$_POST['apellidos'];
$CEDULA=$_POST['cedula'];
$FECHANACIMIENTO=$_POST['fechanacimiento'];
 
$sql = "INSERT INTO personal (usuario, password, nombres, apellidos, cedula, fechanacimiento) VALUES ('$USUARIO', '$CLAVE', '$NOMBRES', '$APELLIDOS', '$CEDULA', '$FECHANACIMIENTO' )";
if (mysqli_query($conn, $sql)) {
      echo "Felicidades tu Usuario a sido creado correctamente";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>