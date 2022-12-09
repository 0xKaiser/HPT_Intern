<?php 

function get_user_info($method, $index){

	include('connect_sqlserver.php');
	$sql = "SELECT * from dbo.Users where $method= '$index'"; 
	$query = $conn->query( $sql );

	if($result= $query->fetch( PDO::FETCH_ASSOC)){
		return $result;
	} else {
		echo "error <a href='javascript: history.go(-1)'>Trở lại</a>";
		return null;
	}

	$stmt=null;
	$conn=null;

	die();
	
}

?>
