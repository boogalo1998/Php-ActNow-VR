<?php


$dbname = 'UnityDB';
$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);

$userID = $_REQUEST['userID'];

//consultar la tabla
$consulta = mysqli_query($conect, "SELECT * FROM ActosActNow WHERE IdUser_FK ='$userID' ");


while($botones1= mysqli_fetch_array($consulta))
{
    $botton1 = $row['Tarea1'];
	$botton2 = $row['Tarea2'];
	$botton3 = $row['Tarea3'];
	$botton4 = $row['Tarea4'];
    $botton5 = $row['Tarea5'];
    $botton6 = $row['Tarea6'];
}

$rta = $button1+$button2+$button3+$button4;

echo $botton1;
echo $botton2;
echo $botton3;
echo $botton4;
echo $botton5;
echo $botton6;
echo $rta;	
echo "\n";

//http://tadeolabhack.com:8081/test/Datos/ActNowPhp/MostrarBotonXusuario.php?IDuser=1032496725

?>