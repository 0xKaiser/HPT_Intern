<!DOCTYPE html>
<?php

session_start();

require 'check_user_permission.php';

$data = array();
$id = isset($_GET['id']) ? (int)$_GET['id'] : null;

include 'get_user_info.php';

if ($id){
    $data = get_user_info('id',$id);
}
if (!$data) {
	echo '<script language="javascript">alert("Không tìm thấy user"); window.location="javascript: history.go(-1)";</script>';
}

$errors = array();
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>

	<body>
		<h2 id="tittle">Chỉnh sửa User</h2>
		<a href="user_manager.php">Quay lại trang Quản lý User</a> <br/> <br/>
        
        <table width="50%" border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td><img src="avatar/<?php echo $data['username']; ?>.png" width="250 "  height="250"></td>
                <td><a href="change_avatar.php?username=<?php echo $data['username']; ?>">Thay avatar</a></td>
            </tr>
        </table>

		<form method="post" action="edit_user.php?id=<?php echo $data['id']; ?>">
            <table width="50%" border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $data['nameUser']; ?>" required/></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><?php echo $data['username']; ?></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="text" name="passwd" value="<?php echo $data['passwd']; ?>" required/></td>
            </tr>
            <tr>
                <td>Số điện thoại</td>
                <td><input type="text" name="phone" value="<?php echo $data['phone']; ?>"/></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $data['email']; ?>"/></td>
            </tr>
            <tr>
                <td>Quyền</td>
                <td><input type="text" name="role" value="<?php echo $data['role']; ?>" required/></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="edit_user" value="Lưu"/>
                </td>
            </tr>
            </table>
        </form>
	</body>
</html>


