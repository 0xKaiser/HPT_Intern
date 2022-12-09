<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="styleRegister.css"/>
	</head>

	<body>
		<h2 id="tittle">Đăng ký thành viên</h2>
		<form method="post" action="register.php" class="form">
			Tên đăng nhập: <input type="text" name="username" >
			Mật khẩu: <input type="password" name="password" />
			Tên tài khoản: <input type="text" name="name" />
			Email: <input type="email" name="email" />
			Phone: <input type="text" name="phone" />
		<input type="submit" class="btndangky" name="dangky" value="Đăng Ký"/>
		<a href='login_form.php' title='Đăng nhập'>Quay lại trang đăng nhập</a> 
		<?php require 'register.php';?>
		</form>
	</body>
</html>