<?php

$id = isset($_POST['id']) ? (int)$_POST['id'] : '';
if ($id){
    include 'connect_sqlserver.php';
    $sql = "DELETE FROM dbo.Users WHERE id = $id;";
    $stm = $conn->exec( $sql );
    if($stm){
        echo '<script language="javascript">alert("Xóa thành công"); window.location="user_manager.php";</script>';
    } else{
        echo '<script language="javascript">alert("Xóa thất bại"); window.location="user_manager.php";</script>';
    }

}



?>