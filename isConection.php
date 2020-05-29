<?php


$dbname = 'UnityDB';
$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);


// Check connection
if ($conect->connect_error) {
	die("Error: No se pudo conectar a MySQL." . $conect->connect_error);
}
else
{
	echo "ConexionEstablecida";
}



//http://tadeolabhack.com:8081/test/Datos/isConection.php

?>