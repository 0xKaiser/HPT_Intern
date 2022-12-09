<?php

session_start();

$name = isset($_GET['username']) ? $_GET['username'] : null;

echo 'gia tri ten moi' . $name;

// file upload.php xử lý upload file
if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
    echo "Phải Post dữ liệu";
    die;
}

// check file have data
if (!isset($_FILES["fileupload"])){
    echo "Dữ liệu không đúng cấu trúc";
    die;
}

// check file error 
if ($_FILES["fileupload"]['error'] != 0){
    echo "Dữ liệu upload bị lỗi";
    die;
}

//target folder
$target_dir    = "avatar/";
$target_file   = $target_dir . $name .'.png';
echo $target_file;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

$allowtypes    = array('jpg', 'png', 'jpeg', 'gif');
$maxfilesize   = 800000;
$allowUpload   = true;

if(isset($_POST["submit"])) {
    //check file is image type
    $check = getimagesize($_FILES["fileupload"]["tmp_name"]);
    if($check !== false) {
        echo "Đây là file ảnh - " . $check["mime"] . ".";
        $allowUpload = true;
    } else {
        echo "Không phải file ảnh.";
        $allowUpload = false;
    }

    // check file size
    if ($_FILES["fileupload"]["size"] > $maxfilesize) {
        echo "Không được upload ảnh lớn hơn $maxfilesize (bytes).";
        $allowUpload = false;
    }

    // check file type
    if (!in_array($imageFileType,$allowtypes )) {
        echo "Chỉ được upload các định dạng JPG, PNG, JPEG, GIF";
        $allowUpload = false;
    }

}

if ($allowUpload){

    // move file to target folder 
    if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file)){
        echo "File lưu tại " . $target_file . "<br>";
        header('Location: user_manager.php');

    }
    else {
        echo "Có lỗi xảy ra khi upload file.";
    }

} else {
    echo "Không upload được file, có thể do file lớn, kiểu file không đúng ...";
}

?>