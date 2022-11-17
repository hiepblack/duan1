<?php
    include "../model/connect.php";

    $tacgia = $_POST['tacgia'];
    $id = $_GET['id'];
    $comment = $_POST['comment'];
    $userId = $_SESSION['user']['userId'];
    $date = date("Y-m-d");
    $query = "INSERT INTO comment_blog( comment_contenblog, userId, blogId, comment_date) VALUES ('$comment','$userId','$id','$date')";
    connect($query);
    var_dump($tacgia);
    header("location:http://localhost/WEB17301/Du_an_1/views/index.php?act=chitiet_blog&id=$id&userid=$tacgia");
?>