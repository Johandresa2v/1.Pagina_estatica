<?php

//codigo para conectar con la base de datos
/*creo la variable conexion y seguido escribo msqli_connect que es el comando de conexion
seguido en los parentesis pongo en tre comillas si local seguido el usuario luego entre comillas la contraseña
si no tiene se deja en blanco y por ultimo entre comillas el nombre de la base de datos 
en mi caso le puse validar*/ 
$conexion=mysqli_connect("localhost","root","","basededatos");

//esta condicional me dira si estoy conectado o no 
if (!$conexion) {
    die("Conexion a fallado: " . mysqli_connect_error());
}

// oculto este mensaje para mejorarla forma visual  echo "Conexion completada con exito";
?>

