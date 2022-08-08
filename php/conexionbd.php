<?php
//llamar paginas php myadmin
$localhost = "localhost";
$ususario = "root"; //llamar usuario
$password = "";
$namedb = "act3"; //llamar el nombre de la base de datos 

//leer las variables 
$conexion = mysqli_connect($localhost,$ususario, $password,$namedb); 

//seleccionar base de datos 
$basededatos = mysqli_select_db($conexion, $namebd);

//imprimir inf con echo 
//PHP debug extension instalar y PHP intellisense y PHP server 
//echo = base de datos existente 

if (!$conexion)
{
    die ("conexion fallida" . mysqli_connect_error());//die imprime errores 

}

echo "la coneccion es exitosa";//imprime conecciones exitosas 
mysqli_close($conexion);//se cierra la conexion a la base de datos 

?>
