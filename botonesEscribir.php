<?php


$dbname = 'UnityDB';
$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);


//recibe los datos de unity, usamos el valor de estas variables
$userID = $_REQUEST['userID'];
$itemID = $_REQUEST['itemID'];


//pregunto si el id de usuario ya esta en la tabla
$IDexistente = mysqli_query($conect, "SELECT * FROM ActosActNow WHERE IdUser_FK='$userID' ");


//se obtienen todos los datos del usuario idUser
while($row = mysqli_fetch_array($IDexistente))
{
	
    $idUser=$row['IdUser_FK'];
    $idSelect = $row['SeleccionActos'];
    $boton1 = $row['Tarea1'];
	$boton2 = $row['Tarea2'];
	$boton3 = $row['Tarea3'];
	$boton4 = $row['Tarea4'];
    $boton5 = $row['Tarea5'];
    $boton6 = $row['Tarea6'];
}



//si no hay idSelect, significa que el usuario no existe
if($idSelect == null && $idUser != $userID)
{
	
	if($itemID == 1)
	{
		//en el php le adiciono +1 al btn1
		$variableBtn1 = 1;
	}
	else
	{
		$variableBtn1 = 0;
	}

	if($itemID == 2)
	{
		//en el php le adiciono +1 al btn2
		$variableBtn2 = 1;
	}
	else
	{
		$variableBtn2 = 0;
	}

	if($itemID == 3)
	{
		//en el php le adiciono +1 al btn3
		$variableBtn3 = 1;
	}
	else
	{
		$variableBtn3 = 0;
	}

	if($itemID == 4)
	{
		//en el php le adiciono +1 al btn4
		$variableBtn4 = 1;
	}
	else
	{
		$variableBtn4 = 0;
	}
    if($itemID == 5)
	{
	
		$variableBtn5 = 1;
	}
	else
	{
		$variableBtn5 = 0;
	}
    
    if($itemID == 6)
	{
		
		$variableBtn6 = 1;
	}
	else
	{
		$variableBtn5 = 0;
	}

	//insertar Valores en la base de datos Bonotes
	$adicionarDatos = mysqli_query($conect, "INSERT INTO ActosActNow(IdUser_FK,Tarea1,Tarea2,Tarea3,Tarea4,Tarea5,Tarea6) VALUES('$userID','$variableBtn1','$variableBtn2','$variableBtn3','$variableBtn4','$variableBtn5','$variableBtn6')");

	echo "adicionado";
}
//si el id de usuario si esta en la tabla entonces cambie los valores 
else
{
	if($itemID == 1)
	{
		//en el php le adiciono +1 al btn1
		$variableBtn1 = $boton1+1;

		$actualizaBtn1 = mysqli_query($conect, "UPDATE ActosActNow SET Tarea1=$variableBtn1  WHERE IdUser_FK='$userID' ");
	}	

	if($itemID == 2)
	{
		//en el php le adiciono +1 al btn2
		$variableBtn2 = $boton2+1;

		$actualizaBtn2 = mysqli_query($conect, "UPDATE ActosActNow SET Tarea2=$variableBtn2  WHERE IdUser_FK='$userID' ");

	}

	if($itemID == 3)
	{
		//en el php le adiciono +1 al btn3
		$variableBtn3 = $boton3+1;

		$actualizaBtn3 = mysqli_query($conect, "UPDATE ActosActNow SET Tarea3=$variableBtn3  WHERE IdUser_FK='$userID' ");
	}

	if($itemID == 4)
	{
		//en el php le adiciono +1 al btn4
		$variableBtn4 = $boton4+1;

		$actualizaBtn4 = mysqli_query($conect, "UPDATE ActosActNow SET Tarea4=$variableBtn4  WHERE IdUser_FK='$userID' ");
	}
    
    if($itemID == 5)
	{
		//en el php le adiciono +1 al btn4
		$variableBtn5 = $boton5+1;

		$actualizaBtn5 = mysqli_query($conect, "UPDATE ActosActNow SET Tarea5=$variableBtn5  WHERE IdUser_FK='$userID' ");
	}
    
    if($itemID == 6)
	{
		//en el php le adiciono +1 al btn4
		$variableBtn6 = $boton6+1;

		$actualizaBtn6 = mysqli_query($conect, "UPDATE ActosActNow SET Tarea6=$variableBtn6  WHERE IdUser_FK='$userID' ");
	}




	echo "cambiado";

}







//http://tadeolabhack.com:8081/test/Datos/ActNowPhp/botonesEscribir.php?userID=0&itemID=2




?>



