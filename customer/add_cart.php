<?php
include "../model/connect.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM product where productId = $id";
    $result  = getOne($query);
    $arrImg = explode(",", $result['productImage']);
    $arrColor = explode(",", $result['productColor']);
    $productImage = $arrImg[0];
    $productColor = $arrColor[0];
    $productName = $result['productName'];
    $productId = $result['productId'];
    if (empty($_SESSION['gio_hang'][$productId])) {
        $_SESSION['gio_hang'][$productId] = array(
            'productName' => $result['productName'],
            'so_luong' => 1,
            'productPrice' => $result['productPrice'],
            'productImage' => $productImage,
            'productColor' => $productColor,
            'productId' => $result['productId'],
            'importPrice' => $result['importPrice']
        );
    } else {
        $_SESSION['gio_hang'][$productId]['so_luong'] += 1;
    }
    header("Location:http://localhost/WEB17301/Du_an_1/views/index.php?act=sanpham&success");
    exit();
};
if (isset($_POST['submit'])) {
    $productId = $_POST['productId'];
    $productName = $_POST['productName'];
    $productColor = $_POST['productColor'];
    $productSize = $_POST['productSize'];
    $productPrice = $_POST['productPrice'];
    $productImage = $_POST['productImage'];
    $importPrice = $_POST['importPrice'];
    $sl = $_POST['productSl'];
    if (!isset($_SESSION['gio_hang'][$productId])) {
        $_SESSION['gio_hang'][$productId] = array(
            'productName' => $productName,
            'so_luong' => $sl,
            'productPrice' => $productPrice,
            'productImage' => $productImage,
            'productColor' => $productColor,
            'productId' => $productId,
            'importPrice' => $importPrice
        );
    } else {
        $_SESSION['gio_hang'][$productId]['so_luong'] += $sl;
    }
    
}
if (isset($_GET['update'])) {
    $productId = $_POST['productId'];
    $sl = $_POST['productSlUpdate'];
    foreach ($productId as $index => $id) {
        $_SESSION['gio_hang'][$id]['so_luong'] = $sl[$index];
    }
}
header("Location:http://localhost/WEB17301/Du_an_1/views/index.php?act=giohang");