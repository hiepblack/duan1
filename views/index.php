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
            $blog = blog();
            include "./blog.php";
            break;
        case "sanpham":
            $products = top10();
            if (isset($_POST['search'])) {
                $cate = $_POST['danhmuc'];
                $price = $_POST['gia'];
                $size = $_POST['size'];
                $query = "SELECT * FROM product where productStatus = 1 ";
                if ($_POST['danhmuc']) {
                    $query .= "and brandId = $cate";
                }
                if ($_POST['gia']) {
                    $string = explode("-", $price);
                    if (count($string) > 1) {
                        $query .= " and productPrice between $string[0] and $string[1]";
                    } else {
                        $query .= " and productPrice > $string[0]";
                    }
                }

                if ($_POST['size']) {
                    $query .= " and productSize = $size";
                }
                $products = getAll($query);
            }
            include "./sanpham.php";
            break;
        case "chitietsanpham":
            $id = $_GET['id'];
            $query = "SELECT * FROM product WHERE productId=$id";
            $one_product = getOne($query);
            $brandId = $one_product['brandId'];
            $query1 = "SELECT * FROM product WHERE brandId=$brandId";
            $products = getAll($query1);
            $queryComment = "SELECT * FROM comment join user on comment.userId = user.userId WHERE productId ='$id'";
            $comments = getAll($queryComment);
            include "./chitietsanpham.php";
            break;
        case "thanhtoan":
            if (isset($_SESSION['user'])) {
                $userName = $_SESSION['user']['userName'];
                $emailUser = $_SESSION['user']['userEmail'];
                $sdt = $_SESSION['user']['sdt'];
                $location = $_SESSION['user']['location'];
            }
            $productOder = $_SESSION['gio_hang'];

            include "./thanh_toan.php";
            break;
        case "dangki":
            include "./dangki.php";
            break;
        case "giohang":
            $success = false;
            if (empty($_SESSION['gio_hang'])) {
                $result = [];
            } else {
                $result = $_SESSION['gio_hang'];
            }
            if (isset($_GET['success'])) {
                $success  = "Bạn đã đặt hàng thành công";
            }
            include "./gio_hang.php";
            break;
        case "dangnhap":
            include "./dangnhap.php";
            break;
        case "chitiet_blog":
            $userid = $_GET['userid'];         
            $query2 = "SELECT * FROM user WHERE userId=$userid";
            $tacgia = getOne($query2);
            $blog = blog();
            $id = $_GET['id'];
            $query = "SELECT * FROM blog WHERE blogId=$id";
            $blog_one = getOne($query);
            $queryComment = "SELECT * FROM comment_blog join user on comment_blog.userId = user.userId WHERE blogId ='$id'";
            $comment_blog = getAll($queryComment);
            include "./chi_tiet_blog.php";
            break;
        default:
            $blog = blog();
            $query = "SELECT * FROM product WHERE brandId=1";
            $products = getAll($query);
            $query1 = "SELECT * FROM product WHERE brandId=3";
            $product = getAll($query1);
            include "./trangchu.php";
            break;
    }
} else {
    include "./trangchu.php";
}

include '../views/modelviews/footer.php';
