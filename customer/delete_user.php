<?php 
include "../model/connect.php";
$id= $_GET["id"];
$case="khachhang";
$table="user";
$tableId="userId";
delete($table,$tableId,$id,$case);
?>