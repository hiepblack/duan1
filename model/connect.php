<?php
session_start();
function connect($query)
{
    $connection = new PDO("mysql:host=localhost;dbname=du_an_1;charset=utf8", "root", "");
    $status = $connection->prepare($query);
    $status->execute();
    return $status;
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
function users(){
    $query = "select * from user";
    $result = getAll($query);
    return $result;
}
function comments(){
    $query = "select * from (comment inner join user on comment.userId = user.userId) inner join product on comment.productId = product.productId";
    $result = getAll($query);
    return $result;
}

