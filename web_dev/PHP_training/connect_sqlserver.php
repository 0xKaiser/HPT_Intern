<?php

//set info db

$servername = "DESKTOP-KCTIM32";
$dbName= "VuongIntern";
$usernameDB = "sa";
$passwordDB = "123";

$checkConnected = false;

try {

	$conn = new PDO("sqlsrv:Server=$servername;Database=$dbName", $usernameDB, $passwordDB);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$checkConnected= true;
} catch(PDOException $e) {
	echo "</br>Ket noi that bai: </br>" . $e->getMessage() . "</br>";
	
}
?>