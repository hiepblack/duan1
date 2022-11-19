<?php 
    include "../model/connect.php";
    $id = $_GET['id'];
    $query = "DELETE FROM `orders` WHERE orderId = $id";
    connect($query);    
    header("Location:http://localhost/WEB17301/du_an_1/admin/index.php?act=donhang");