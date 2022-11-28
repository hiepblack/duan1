<?php 
include "../model/connect.php";
$email = $_POST["email"];
$query="SELECT * FROM user WHERE userEmail='$email'";
$user = getOne($query);
if(empty($user)){
    header("location:http://localhost/WEB17301/Du_an_1/views/index.php?act=quenmk&fall");
}
else{
    header("location:http://localhost/WEB17301/Du_an_1/views/index.php?act=setpass&success=$email");
}
?>