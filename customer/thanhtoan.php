<?php
include "../model/connect.php";
require "../mail/sendemail.php";
// echo "<pre>";
// var_dump($_POST["lai"]); die;
// var_dump($_SESSION['gio_hang']);
// var_dump($_SESSION['user']);exit();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$name ="";
$email ="";
$sdt = "";
$location = "";
$note = $_POST['orderNote'];
$ngay_nhap = date("Y-m-d H:i:s",time());
if(!empty($_SESSION['user'])){
    $name = $_SESSION['user']['userName'];
    $email = $_SESSION['user']['userEmail'];
    $sdt = $_POST['orderSdt'];
    $location = $_POST['orderLocation'];
}else{
    $name =$_POST['userName'];
    $email =$_POST['userEmail'];
    $sdt = $_POST['orderSdt'];
    $location = $_POST['orderLocation'];
}
//tính tổng tiền
$total = 0;
$profit = 0;
$arrayProduct = array();
foreach ($_SESSION['gio_hang'] as $key => $value){
    $arrayProduct[] = $value;
    $total += $value['productPrice'] * $value['so_luong'];
    $profit += ($value['productPrice']-$value['importPrice']) * $value['so_luong'];
}
$query = "INSERT INTO `orders`(`orderId`, `tenkh`, `orderDate`, `totalMoney`, `orderNote`, `location`, `sdt`,`statusId`,`profit`) VALUES (null,'$name','$ngay_nhap','$total','$note','$location','$sdt',1,$profit)";
// lấy id order và thêm dữ liệu vào bảng order
$last_id = getOrderId($query);
$queryString="";
$num = count($arrayProduct);
foreach ($arrayProduct as $key => $value){
    $totalProduct =$value['productPrice'] * $value['so_luong'];
    $queryString .="(null,'".$last_id."','".$value['productId']."','".$value['so_luong']."','".$totalProduct."')";
    if($key != $num -1){
        $queryString .=",";
    }
}
var_dump($queryString);

$queryDetail = "INSERT INTO `orderdetail`(`orderDetailId`, `orderId`, `productId`, `quantity`, `totalMoney`) VALUES ".$queryString.";";

connect($queryDetail);
// mail
$title = "THÔNG TIN ĐƠN HÀNG CỦA BẠN TẠI SPORT BICYCLE";
$content ="";
foreach ($_SESSION['gio_hang'] as $key => $value){
    $namesp .= 
    "<p>".$value['productName']."</p>";
}

$content .= "<p>Họ tên khách hàng: ".$name."</p>";
$content .= "<p>Số điện thoại: ".$sdt."</p>";
$content .= "<p>Địa chỉ: ".$location."</p>";
$content .= "<p>Sản phẩm đã đặt: </p>";
$content .= $namesp;
$content .= "<p>Tổng tiền: ".number_format($total)." VNĐ</p>";
Mailer($email,$title,$content);
foreach ($_SESSION['gio_hang'] as $key => $value){
    unset($_SESSION['gio_hang'][$key]);
}
header("Location:http://localhost/WEB17301/Du_an_1/views/index.php?act=giohang&success");
?>