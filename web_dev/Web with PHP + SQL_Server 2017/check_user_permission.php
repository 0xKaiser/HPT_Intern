<?php

if (isset($_SESSION['username']) == false) {
	//check user login, if dont => return to login_form page
	header('Location: http://localhost/webintern/login_form.php');
}else {
	if (isset($_SESSION['role']) == true) {
		$permission = $_SESSION['role'];
		if ($permission == '0') {
			// Nếu không phải admin thì xuất thông báo
			echo "Bạn không đủ quyền truy cập vào trang này<br>";
			echo "<a href='http://localhost/webintern/index.php'> Click để về lại trang chủ</a>";
			exit();
		}
	}
}
?>