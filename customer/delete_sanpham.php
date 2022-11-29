
<?php 
include "../model/connect.php";
$id= $_GET["id"];
$case="sanpham";
$table="product";
$tableId="productId";
delete($table,$tableId,$id,$case);
?>
