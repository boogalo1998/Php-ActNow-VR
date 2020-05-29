<?php


$dbname = 'UnityDB';
$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);


//recibe los datos de unity, usamos el valor de estas variables
$cedula = $_REQUEST['cedu'];


//pregunto si el id de usuario ya esta en la tabla
$CedulaExistente = mysqli_query($conect, "SELECT * FROM UsuariosActNow WHERE Cedula='$cedula' ");


//se obtienen todos los datos del usuario idUser
while($row = mysqli_fetch_array($CedulaExistente))
{
    $usuarioID = $row['User_id'];
    $usuarioNombre  = $row['Nombre'];
    $usuarioCedula = $row['Cedula'];

   
    echo $usuarioNombre;
    

}



//http://tadeolabhack.com:8081/test/Datos/leer.php?cedula=1032496725


?>

