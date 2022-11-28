<?php 
include "../model/connect.php";
$email=$_POST["email"];
$pass= $_POST["pass"];
$query= "update user set userPassword='$pass' where userEmail='$email'";
connect($query);
header("location:http://localhost/WEB17301/Du_an_1/views/index.php?act=dangnhap&successful");
?>