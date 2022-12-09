<?php
//define session
session_start();

//define vietnamese
header('Content-Type: text/html; charset=UTF-8');

//check input login form 
if (isset($_POST['dangnhap'])){	
  
	//get data from input
	$username = addslashes($_POST['username']);
	$password = addslashes($_POST['password']);
	  
	//check username and password not null or invalid 
	if (!$username || !$password) {
		echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
		exit();
	}
	  
	// decrypt pass 
	//$password = md5($password);

	//check username existed in database  
	include('check_user_existed.php');
	if(!checkUserExisted($username)){
		echo "<strong>Tên đăng nhập hoặc mật khẩu không đúng</strong>";
		exit();
	}

	//define connect file and check password
	include('connect_sqlserver.php');
	$sql ="SELECT * from dbo.Users where username = '$username' and passwd = '$password'"; 
	$query = $conn->query( $sql );

   	if ( $result = $query->fetch( PDO::FETCH_ASSOC ) ){

    	//Save username when 
		$_SESSION['username'] = $username;
		$_SESSION['role'] = $result['role'];
		//goto main page 
		header('Location: user_manager.php');
		
    } else {
		echo "<b>Tên đăng nhập hoặc mật khẩu không đúng!<b>";
	}

	//close connnection 
	$query= null;
	$conn=null;	

	// exit this function 
	die();
}
?>