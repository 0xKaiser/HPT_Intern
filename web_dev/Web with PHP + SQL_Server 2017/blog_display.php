<?php 
include "connect_sqlserver.php";

$id = isset($_GET['tittle']) ? $_GET['tittle']: '';

$sql = "select * from dbo.Blogs where tittle = '$id'";

$query = $conn->query( $sql );
$conn = null;

if (isset($_POST['SubmitCmt'])) {

	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$comment = $_POST['Comment']; 

	//Get old comments
	$old = fopen("Comments/$id.txt", "r+t");
	$old_comments = fread($old, 1024);

	//Delete everything, write down new and old comments
	$write = fopen("Comments/$id.txt", "w+");
	$string = "<b>".$phone."</b><br>".$comment."<br>\n".$old_comments;
	fwrite($write, $string);
	fclose($write);
	fclose($old);

	echo '<script language="javascript">alert("Đã gửi bình luận");</script>';

}
//Read comments
$read = fopen("Comments/$id.txt", "r+t");

?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>

	<body style="font: 20px Verdana";>
		<a href="blog_index.php">Quay lại trang Hiện danh sách Blogs</a> <br/> <br/>

		<?php 
			while ( $result= $query->fetch( PDO::FETCH_ASSOC ) ) {
		?>
			<h2><?php echo $result['tittle']; ?></h2></div></ br>
			<p><?php echo $result['content']; ?></p>
		<?php } ?>

		<h3>Bình luận</h3>
		<form action="" method="POST">
			<label> Email: <input type="text" name="email" class="Input" style="width: 225px" required>
			</label>
			<br><br>
			<label> Số điện thoại: <input type="text" name="phone" class="Input" style="width: 225px" required>
			</label>
			<br><br>
			<label> Bình luận: <br>
		    <textarea name="Comment" class="Input" style="width: 300px" required></textarea>
		   	</label>
		   	<br><br>
		   	<input type="submit" name='SubmitCmt' value="Gửi bình luận" class="Submit">
			<?php
			   	echo "<br>";
				echo "<br><br>Comments<hr>".fread($read, 1024);
				fclose($read);
			?>

		</form>
	</body>
</html>


