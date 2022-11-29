<?php
session_start();
function connect($query)
{
    $connection = new PDO("mysql:host=localhost;dbname=du_an_1;charset=utf8", "root", "");
    $status = $connection->prepare($query);
    $status->execute();
    return $status;
}
function getOrderId($query){
    $connection = new PDO("mysql:host=localhost;dbname=du_an_1;charset=utf8", "root", "");
    $status = $connection->prepare($query);
    $status->execute();
    $orderId =  $connection -> lastInsertId();
    return $orderId;
}
function getAll($query)
{
    $result = connect($query)->fetchAll();
    return $result;
}
function getOne($query)
{
    $result = connect($query)->fetch();
    return $result;
}
function getColumn($query){
    $result = connect($query)->fetchColumn();
    return $result;
}

function checkUser($result){
    if($result){
        if($result['roleId'] == 4){
            return true;
        }else{
            $_SESSION['message'] = "bạn không có quyền truy cập vào trang";
            return false;
        }
    }else{
        $_SESSION['message'] = "Thông tin chưa chính xác";
        return false;
    }
}
function top10(){
    $query = "select * from product ";
    $result = getAll($query);
    return $result;
}
// function top3(){
//     $query = "select * from product where 1 order by so_luot_xem desc limit 0,3";
//     $result = getAll($query);
//     return $result;
// }

function getCategory(){
    $query = "select * from brand";
    $result = getAll($query);
    return $result;
}
function product(){
    $query ="select * from product";
    $result = getAll($query);
    return $result;
}
function deleteProduct($id){
    $query="delete from product where productId = $id";
    connect($query);
}
function addProduct($productName,$productPrice,$productColor,$productSize,$brandId,$productImage,$productDesc,$productDiscount){
    $query="INSERT INTO product( productName, productPrice, productColor, productSize, brandId, productImage, productDesc, productDiscount,productStatus) 
    VALUES('$productName',$productPrice,'$productColor',$productSize,$brandId,'$productImage','$productDesc',$productDiscount,1)";
    connect($query);
}
function updateProduct($productId,$productName,$productPrice,$productColor,$productSize,$brandId,$stringImage,$productDesc,$productDiscount){
    $query="UPDATE product SET 
    productName='$productName',productPrice=$productPrice,productColor='$productColor',productSize=$productSize,brandId=$brandId,
    productImage='$stringImage',productDesc='$productDesc',productDiscount=$productDiscount WHERE productId=$productId";
    connect($query);
}
function addBrand($brandName){
    $query ="insert into brand(brandName) values('$brandName')";
    connect($query);
}
function updateBrand($id,$brandName){
    $query = "update brand set brandName = '$brandName' where brandId = $id";
    connect($query);
}
function deleteBrand($id){
    $query0 = "update product set brandId = 0 where brandId = $id";
    connect($query0);
    $query = "delete from brand where brandId = $id";
    connect($query);
}
function users(){
    $query = "select * from user";
    $result = getAll($query);
    return $result;
}
function orders(){
    $query = "select * from orders";
    $result = getAll($query);
    return $result;
}
function comments(){
    $query = "select * from (comment inner join user on comment.userId = user.userId) inner join product on comment.productId = product.productId";
    $result = getAll($query);
    return $result;
}
function comment_blog(){
    $query = "select * from (comment_blog inner join user on comment_blog.userId = user.userId) inner join blog on comment_blog.blogId = blog.blogId";
    $result = getAll($query);
    return $result;
}
function blog(){
    $query2 ="SELECT * FROM blog";
    $result=getAll($query2);
    return $result;
}

function checkStatus($number){
    if($number==1){
        echo "Chưa Thanh Toán";
    }elseif($number ==2){
        echo "Đã Thanh Toán";
    }else{
        echo "Chưa xác đinh";
    }
}
function delete($table,$tableId,$id,$case){
    $query="DELETE FROM $table WHERE $tableId=$id";
    connect($query);
    header("location:http://localhost/WEB17301/du_an_1/admin/index.php?act=$case");
}