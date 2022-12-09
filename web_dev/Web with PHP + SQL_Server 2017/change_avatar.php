<!DOCTYPE html>
<?php	

session_start();
$username = isset($_GET['username']) ? $_GET['username'] : null;
echo $username;

?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>

	<body>
		<h2 id="tittle">Thay ảnh đại diện</h2>
		<form action="upload_avatar.php?username=<?php echo $username; ?>" method="post" enctype="multipart/form-data">
		    Chọn file để upload:
		    <input type="file" name="fileupload" id="fileupload">
		    <input type="submit" value="Đăng ảnh" name="submit">
		</form>
	</body>
</html>
