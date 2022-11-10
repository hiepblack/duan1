<?php 
include "../model/connect.php";
$fristName = $_POST["fristName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$date = $_POST["date"];
$password = $_POST["password"];
$sex = $_POST["sex"];
$roleId= $_POST["roleId"];
$image = $_FILES["image"]['name'];
if (isset($_FILES['image'])) {
    $file = $_FILES['image'];
    $file_name = $file['name'];
    move_uploaded_file($file['tmp_name'], '../img/' . $file_name);
}
$query = "SELECT * FROM user WHERE userEmail='$email'";
$user = getAll($query);

if(!empty($user)){
    header("location:http://localhost/WEB17301/Du_an_1/views/index.php?act=dangki&error");
    die;
}else{
    $query = "INSERT INTO user( userName, userEmail, userPassword, userGender, roleId, userBirthday, userImage) VALUES ('$lastName $fristName','$email','$password',$sex,$roleId,'$date','$image')";   
    connect($query);
    header("location:http://localhost/WEB17301/Du_an_1/views/index.php?act=dangnhap");
}
?>