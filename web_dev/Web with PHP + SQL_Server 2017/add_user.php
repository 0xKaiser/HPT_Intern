<?php

function add_user($username, $password, $name, $email, $phone, $role){

	//define connect file and insert into database 
	include('connect_sqlserver.php');
	$sql = "INSERT INTO dbo.Users (username, passwd, nameUser, email, phone, role) VALUES (?, ?, ?, ?, ?, ?)";
	$stmt = $conn->prepare( $sql );
	$result = $stmt->execute([$username, $password, $name, $email, $phone, $role]);
	if ($result) {
		return true;
	} else{
		return false;
	}

	$stmt=null;
	$conn=null;

	die();
	
}
?>