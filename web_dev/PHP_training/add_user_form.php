<!DOCTYPE html>
<?php
session_start();

require 'check_user_permission.php';
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="styleRegister.css"/>
	</head>

	<body>
		<h2 id="tittle">Thêm thành viên</h2>
		<form method="post" action="register.php" class="form">
			Tên đăng nhập: <input type="text" name="username" >
			Mật khẩu: <input type="password" name="password" />
			Tên tài khoản: <input type="text" name="name" />
			Email: <input type="email" name="email" />
			Số điện thoại: <input type="text" name="phone" />
			Quyền User: <input type="text" name="role" />
		<input type="submit" class="btnAddUser" name="AddingUser" value="Xác nhận"/>
		<a href='user_manager.php'>Quay lại trang quản lý</a> 
		<?php require 'register.php';?>
		</form>
	</body>
</html>


