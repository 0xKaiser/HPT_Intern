<!DOCTYPE html> 
<?php
session_start();

require 'check_user_permission.php';

include 'connect_sqlserver.php';
$sql= "SELECT * from dbo.Users";
$query = $conn->query( $sql );

?>

<html>
	<head>
		<title>trang chủ</title>
		<meta charset="utf-8">
	</head>

	<body>
		<h3 style="text-align: right;">Xin chào <?php echo $_SESSION['username']; ?> </h3>
		<a href="add_user_form.php">Thêm user</a> <br/> <br/>
        <table width="100%" border="1" cellspacing="0" cellpadding="10">
            <tr style="background-color: #6de29c; text-align: center;">
                <td>ID</td>
                <td>Tên người dùng</td>
                <td>Tên đăng nhập</td>
                <td>Email</td>
                <td>Số điện thoại</td>
                <td>Vai trò</td>
                <td>Quyền</td>
            </tr>
        <?php while ($result = $query->fetch( PDO::FETCH_ASSOC)){ ?>
		<tr>
            <td><?php echo $result['id']; ?></td>
            <td><?php echo $result['nameUser']; ?></td>
            <td><?php echo $result['username']; ?></td>
            <td><?php echo $result['email']; ?></td>
            <td><?php echo $result['phone']; ?></td>
            <td ><?php echo $result['role']=='0'?'Thành viên':'Quản trị' ?></td>
            <td style="text-align: center";>
                <form method="post" action="delete_user.php">
                    <input onclick="window.location = 'edit_user_form.php?id=<?php echo $result['id']; ?>'" type="button" value="Sửa"/>
                    <input type="hidden" name="id" value="<?php echo $result['id']; ?>"/>
                    <input onclick="return confirm('Bạn có chắc muốn xóa không?');" type="submit" name="delete" value="Xóa"/>
                </form>
            </td>
        </tr>
        <?php } ?>
	    </table>
        <br><a href="export_excel.php">Xuất file</a> <br/> <br/>
	</body>
</html>