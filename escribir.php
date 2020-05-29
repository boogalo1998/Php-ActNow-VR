<?php


$dbname = 'UnityDB';
$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);


//recibe los datos de unity, usamos el valor de estas variables

$nombre = $_REQUEST['nombre'];
$cedula = $_REQUEST['cedula'];


  //insertar Valores en la base de datos Bonotes
  $adicionarDatos = mysqli_query($conect, "INSERT INTO UsuariosActNow(Nombre,Cedula) VALUES('$nombre','$cedula')");

  echo "adicionado";





//http://tadeolabhack.com:8081/test/Datos/ActNowPhp/escribir.php?nombre=nicolas&apellidos=lopez


?>

