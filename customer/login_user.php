<?php
    include "../model/connect.php";
    $email = $_POST['email'];
    $password = $_POST['password'];
    var_dump($email);
    $query = "SELECT * FROM user WHERE userEmail ='$email' and userPassword = '$password'";
    $result = getOne($query);
    $username = $result['userName'];
    if($result){
        if(checkUser($result)){
            $_SESSION['user'] = $result;
            header("Location:http://localhost/WEB17301/Du_an_1/admin/index.php?act=trangchu");
        }else{
            $_SESSION['user'] = $result;
            header("Location:http://localhost/WEB17301/Du_an_1/views/index.php?act=trangchu&succes=$username");
        }
    }else{
        header("Location:http://localhost/WEB17301/Du_an_1/views/index.php?act=dangnhap&error");
        exit();
}