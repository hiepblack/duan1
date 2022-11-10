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
            if (isset($_POST['search'])) {
                $cate = $_POST['danhmuc'];
                $price = $_POST['gia'];
                $size = $_POST['size'];
                if (!empty($_POST['danhmuc']) && !empty($_POST['gia']) && empty($_POST['size'])) {
                    $query = "SELECT * FROM product where brandId = $cate ";
                    if ($price == 1) {
                        $query .= " and productPrice between 500000 and 1000000";
                        var_dump($query);
                    } else if ($price == 2) {
                        $query .= " and productPrice between 1000000 and 1500000";
                    } else if ($price == 3) {
                        $query .= " and productPrice between 1500000 and 2000000";
                    } else if ($price == 4) {
                        $query .= " and productPrice > 2000000";
                    }
                    $products = getAll($query);
                } else if (isset($_POST['danhmuc']) && !empty($_POST['danhmuc'])) {
                    $query = "SELECT * FROM product where brandId = $cate";
                    $products = getAll($query);
                } else if (isset($_POST['gia']) && !empty($_POST['gia'])) {
                    switch ($_POST['gia']) {
                        case "1":
                            $query = "SELECT * FROM product where productPrice between 500000 and 1000000";
                            $products = getAll($query);
                            break;
                        case "2":
                            $query = "SELECT * FROM product where productPrice between 1000000 and 1500000";
                            $products = getAll($query);
                            break;
                        case "3":
                            $query = "SELECT * FROM product where productPrice between 1500000 and 2000000";
                            $products = getAll($query);
                            break;
                        case "4":
                            $query = "SELECT * FROM product where productPrice >2000000";
                            $products = getAll($query);
                            break;
                        default:
                            $products = top10();
                            break;
                    }
                } else if (isset($_POST['size']) && !empty($_POST['size'])) {
                    $query = "SELECT * FROM product where productSize = $size";
                    $products = getAll($query);
                }
            }
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
            if(isset($_SESSION['user'])){
                $userName = $_SESSION['user']['userName'];
                $emailUser = $_SESSION['user']['userEmail'];

            }
            $productOder = $_SESSION['gio_hang'];
            
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
