<?php 
include "../model/connect.php";
$name = $_POST['name'];
$email= $_POST['email'];
$phone = $_POST['phone'];
$content = $_POST['content'];
$query = "INSERT INTO lienhe(nameLh, emailLh, sdtLh, contentLh) VALUES ('$name','$email','$phone','$content')";
connect($query);
header("location:http://localhost/WEB17301/Du_an_1/views/index.php?act=lienhe&success");
?>