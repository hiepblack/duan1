<?php 

include "../model/connect.php";
$id= $_GET['id'];
$query = "DELETE FROM comment_blog WHERE comment=$id";
connect($query);
header("location:http://localhost/WEB17301/du_an_1/admin/index.php?act=binhluan");

?>s