<!DOCTYPE html>
<?php 
	include ('connect_sqlserver.php');

	$sql = "select * from dbo.Blogs";
	
	$query = $conn->query( $sql );
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>

	<body>
		<a href="login_form.php">Đăng nhập</a> <br/> <br/>
		<h2 id="tittle">Danh sách Blog</h2>
		<div class="innertube">
			<table width="100%" border="1">
				<tr>
				<?php
				$i = 0;
				while ( $result= $query->fetch( PDO::FETCH_ASSOC) ) {
					if ($i == 4) {
						echo "</tr>";
						$i = 0;
					}
				?>
				<td >
					<b><?php echo ($result['tittle']);?></b>
					<p><?php echo substr($result["content"], 0, 100). " ...";?></p>
					<a href="blog_display.php?tittle=<?php echo $result["tittle"]; ?>"> Xem thêm</a>
				</td>
				
				<?php
						$i++;
					}
				?>
			</table>	
		</div>
		<footer style="text-align: right;">Make by &copy; Kaiser</footer>		
	</body>
</html>