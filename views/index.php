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
            include "./chitietsanpham.php";
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
            include "./trangchu.php";
            break;
    }
} else {
    include "./trangchu.php";
}

include '../views/modelviews/footer.php';
