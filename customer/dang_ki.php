<?php
include "../model/connect.php";
$email = $_POST["email"];
$date = $_POST["date"];
$password = $_POST["password"];
$sex = $_POST["sex"];
$roleId = $_POST["roleId"];
$image = $_FILES["image"]['name'];
if (isset($_FILES['image'])) {
    $file = $_FILES['image'];
    $file_name = $file['name'];
    move_uploaded_file($file['tmp_name'], '../img/' . $file_name);
}
$query = "SELECT * FROM user WHERE userEmail='$email'";
$user = getAll($query);

if (isset($_POST['submit1'])) {
    $fristName = $_POST["fristName"];
    $lastName = $_POST["lastName"];
    if (!empty($user)) {
        header("location:http://localhost/WEB17301/Du_an_1/views/index.php?act=dangki&error");
        die;
    } else {
        $query = "INSERT INTO user( userName, userEmail, userPassword, userGender, roleId, userBirthday, userImage,sdt,location) VALUES ('$lastName $fristName','$email','$password',$sex,$roleId,'$date','$image','','')";
        connect($query);
        header("location:http://localhost/WEB17301/Du_an_1/views/index.php?act=dangnhap");
    }
}
if (isset($_POST['submit'])) {
    $userName = $_POST["userName"];
    $sdt = $_POST["sdt"];
    $location = $_POST["location"];
    var_dump($_POST);
  
    if (!empty($user)) {
        header("location:http://localhost/WEB17301/Du_an_1/admin/index.php?act=addkh&error");
      
    } else {
        $query = "INSERT INTO user( userName, userEmail, userPassword, userGender, roleId, userBirthday, userImage,sdt,location) VALUES ('$userName','$email','$password',$sex,$roleId,'$date','$image','$sdt','$location')";
        connect($query);
        header("location:http://localhost/WEB17301/du_an_1/admin/index.php?act=khachhang");
    }
}
