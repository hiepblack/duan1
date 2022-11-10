<?php 
    include "../model/connect.php";
    $index = $_GET['id'];
    var_dump($index);
    if(isset($_GET['id'])){
        unset($_SESSION['gio_hang'][$index]);
    }
    echo "<pre>";
    var_dump($_SESSION['gio_hang']);
    
header("Location:http://localhost/WEB17301/Du_an_1/views/index.php?act=giohang");