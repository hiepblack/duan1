<?php
include "../model/connect.php";
include "../views/modelviews/header.php";
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case "gioithieu":
            include "./gioithieu.php";
            break;
        case "lienhe":
            include "./lienhe.php";
            break;
        case "blog":
            include "./blog.php";
            break;
        case "sanpham":
            $products = top10();
            include "./sanpham.php";
            break;
        case "chitietsanpham":
            $id =$_GET['id'];
            $query= "SELECT * FROM product WHERE productId=$id";
            $one_product =getOne($query);
            $brandId=$one_product['brandId'];
            $query1 = "SELECT * FROM product WHERE brandId=$brandId";
            $products=getAll($query1);
            include "./chitietsanpham.php";
            break;
        case "thanhtoan":
            include "./thanh_toan.php";
            break;
        case "dangki":
            include "./dangki.php";
            break;
            case "giohang":
                include "./gio_hang.php";
                break;
        case "dangnhap":
            include "./dangnhap.php";
            break;
        default:
            $products = top10();
            $product = product();
            include "./trangchu.php";
            break;
    }
} else {
    include "./trangchu.php";
}

include '../views/modelviews/footer.php';
