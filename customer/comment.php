<?php
    include "../model/connect.php";
    $id = $_GET['id'];
    $comment = $_POST['comment'];
    $userId = $_SESSION['user']['userId'];
    $date = date("Y-m-d");
    $query = "INSERT INTO comment(commentContent,userId ,productId,commentDate) VALUES ('$comment','$userId','$id','$date')";
    connect($query);
    header("location:http://localhost/WEB17301/Du_an_1/views/index.php?act=chitietsanpham&id=$id");
?>