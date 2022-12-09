<?php

//check input of form 
if ( (isset($_POST['dangky'])) or (isset($_POST['AddingUser'])) ) {

	//get data input 
	$username = addslashes($_POST['username']);
	$password = addslashes($_POST['password']);
	$name = addslashes($_POST["name"]);
	$email = addslashes($_POST["email"]);
	$phone = addslashes($_POST["phone"]);
	

	//check username and password not null or invalid
	if (!$username || !$password) {
		echo '<script language="javascript">alert("Vui lòng nhập tên đăng nhập và mật khẩu"); window.location="register_form.php";</script>';
		exit();
	}

	//check username existed in db
	include('check_user_existed.php');
	if(checkUserExisted($username)){
		echo '<script language="javascript">alert("Tên đăng nhập đã tồn tại"); window.location="javascript: history.go(-1)";</script>';
		exit();
	}

	include 'add_user.php';
	if (isset($_POST['AddingUser'])) {
		$role = addslashes($_POST["role"]);
		if (add_user($username, $password, $name, $email, $phone, $role)){
			echo '<script language="javascript">alert("Thêm user thành công"); window.location="user_manager.php";</script>';
		} else{
			echo '<script language="javascript">alert("Lỗi thêm user"); window.location="add_user_form.php";</script>';
		}
	}
	if (isset($_POST['dangky'])){
		if (add_user($username, $password, $name, $email, $phone, '0')){
			echo '<script language="javascript">alert("Đăng ký thành công! Vui lòng đăng nhập lại để tiếp tục"); window.location="login_form.php";</script>';
		} else{
			echo '<script language="javascript">alert("Lỗi đăng kí"); window.location="register_form.php";</script>';
		}
	}

	die();
}
?>