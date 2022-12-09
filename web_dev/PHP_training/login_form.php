<!DOCTYPE html> 
<html> 
	<head> 
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
		<link rel="stylesheet" href="style.css"/> 
	</head> 

	<body> 
		<h1 class="dangnhap" id="titledangnhap">Đăng nhập</h1>
		<form action='login_form.php' class="dangnhap" method='POST'> 
			Tên đăng nhập : <input type='text' name='username' /> 
			Mật khẩu : <input type='password' name='password' /> 
		<input type='submit' class="button" name="dangnhap" value='Đăng nhập' /> 
		<a href='register_form.php' title='Đăng ký'>Chưa có tài khoản?</a> 
		<?php require 'check_login.php'; ?> 
		<form> 
	</body> 
</html>