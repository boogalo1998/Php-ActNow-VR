<?php


$dbname = 'UnityDB';
$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);

$userID = $_REQUEST['IDuser'];

//consultar la tabla
$consulta = mysqli_query($conect, "SELECT * FROM ActosActNow WHERE IdUser_FK ='$userID' ");


while($row= mysqli_fetch_array($consulta))
{
    $botton1 = $row['Tarea1'];
	$botton2 = $row['Tarea2'];
	$botton3 = $row['Tarea3'];
	$botton4 = $row['Tarea4'];
    $botton5 = $row['Tarea5'];
    $botton6 = $row['Tarea6'];
}


$rta = $botton1+$botton2+$botton3+$botton4+$botton5+$botton6;


echo ($botton1, $botton2, $botton3, $botton4, $botton5,$botton6,$rta);




//http://tadeolabhack.com:8081/test/Datos/ActNowPhp/ActNowBotonesInfo.php?IDuser=1032496725

?>