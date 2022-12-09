<?php

//check input of form 
if (isset($_POST['edit_user'])) {

	//get data input 
	$password = addslashes($_POST['passwd']);
	$name = addslashes($_POST["name"]);
	$email = addslashes($_POST["email"]);
	$phone = addslashes($_POST["phone"]);
	$role = addslashes($_POST["role"]);
	$id = isset($_GET['id']) ? (int)$_GET['id'] : null;	

	//check username and password not null or invalid
	if (!$password) {
		echo '<script language="javascript">alert("Vui lòng nhập mật khẩu"); window.location="edit_user_form.php";</script>';
		exit();
	}

	include('connect_sqlserver.php');
	$sql = "UPDATE dbo.Users SET 
		passwd = ?
		, nameUser= ?
		,email=?
		,phone=?
		,role=? 
		where id=?;";

	$stmt = $conn->prepare( $sql );
	$result = $stmt->execute([$password, $name, $email, $phone, $role, $id]);
	if ($result) {
		echo '<script language="javascript">alert("Chỉnh sửa thành công"); window.location="user_manager.php";</script>';
	} else{
		echo '<script language="javascript">alert("Chinh sua That bai"); window.location="edit_user_form.php";</script>';
	}

	$stmt=null;
	$conn=null;



	die();

}
?>