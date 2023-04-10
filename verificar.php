<?php

include('conector.php');

$USUARIO=$_POST['usuario'];
$CLAVE=$_POST['password'];


$consulta = "SELECT* FROM personal where usuario = '$USUARIO' and password ='$CLAVE' ";
$resultado= mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:./APPPRUEBAS/PRINCIPAL.html");

}else{
    include("login.html");
    ?>
    <h1>ERROR DE AUTENTIFICACION</h1>
    <?php
    
}
mysqli_free_result($resultado);
mysqli_close($conexion);




?>