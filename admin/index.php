<?php
include "../model/connect.php";
include "../admin/modeladmin/header.php";
if (isset($_GET['act'])) {
    switch ($_GET['act']) {

        case "trangchu":
            $topTenProducts = top10();
            include "./trang_chu.php";
            break;
            // chức năng sản phẩm
        case "sanpham":
            $products = product();
            if (isset($_POST['search']) && $_POST['search']) {
                $search = $_POST['search'];
                $query = "select * from hang_hoa where  ten_hh like '%$search%' or ten_hh = '$search'";
                $products = getAll($query);
            }
            include "./san_pham.php";
            break;
        case "addsp":
            if (isset($_POST["submit"])) {               
                $productName = $_POST['productName'];
                $productPrice = $_POST['productPrice'];
                $productDiscount = $_POST['productDiscount'];
                $productDesc = $_POST['productDesc'];
                $productSize = $_POST['productSize'];
                $productColor = $_POST['productColor'];
                $productImage = $_FILES['productImage']['name'];
                $stringImage = '';
                $numberArrayImage = count($productImage);
                foreach ($productImage as $key => $value) {
                    $stringImage .= $value;
                    $stringImage .= "";
                    if ($key !== $numberArrayImage - 1) {
                        $stringImage .= ",";
                    }
                    move_uploaded_file($_FILES['productImage']['tmp_name'][$key], "../img/" . $value);
                }
                $brandId = $_POST['brandId'];
                addProduct($productName, $productPrice, $productColor, $productSize, $brandId, $stringImage, $productDesc, $productDiscount);
                $yourURL="http://localhost/WEB17301/Du_an_1/admin/index.php?act=sanpham";
                echo ("<script>location.href='$yourURL'</script>");
            }
            include "./form/form_them_moi_san_pham.php";
            break;
        case "updatesp":
            if (isset($_GET['id'])) {
                $productId = $_GET['id'];
            } else {
                $productId = $_POST['productId'];
            }
            $query = "select * from product where productId = $productId";
            $product = getOne($query);
            $queryCate = "select * from brand";
            $category = getAll($queryCate);
            if (isset($_POST["submit"])) {
                $error = array();
                if (isset($_POST['productName'], $_POST['productPrice'], $_POST['productDiscount'], $_POST['productDesc'], $_POST['brandId'], $_POST['productColor'], $_POST['productSize'])) {
                    $productName = "";
                    $productPrice = "";
                    $productDiscount = "";
                    $productDesc = $_POST['productDesc'];
                    $productSize = "";
                    $productColor = $_POST['productColor'];
                    $productImage = "";
                    $brandId = $_POST['brandId'];
                    if ($_POST['productName'] == "" || strlen($_POST['productName']) < 5) {
                        $error['name'] = "Vui lòng nhập tên sản phẩm trên 5 kí tự!";
                    } else {
                        $productName = $_POST['productName'];
                    }
                    //
                    if ($_POST['productPrice'] < 0) {
                        $error['price'] = "Vui lòng nhập giá là số dương!";
                    } else {
                        $productPrice = $_POST['productPrice'];
                    }
                    //
                    if ($_POST['productDiscount'] < 0 || $_POST['productDiscount'] > 100) {
                        $error['discount'] = "Vui lòng nhập số dương và bé hơn 100!";
                    } else {
                        $productDiscount = $_POST['productDiscount'];
                    }
                    //
                    if ($_POST['productSize'] < 0 || $_POST['productSize'] > 75) {
                        $error['size'] = "Vui lòng nhập số dương và bé hơn 75!";
                    } else {
                        $productSize = $_POST['productSize'];
                    }
                    //
                    if ($_POST['productColor'] == "") {
                        $error['color'] = "Vui lòng chọn màu sắc!";
                    } else {
                        $productColor = $_POST['productColor'];
                    }
                    //
                    if (!isset($_FILES['productImage']) || $_FILES['productImage']['name'] == "") {
                        $productImage = $_POST['oldImage'];
                    } else {
                        $productImage = $_FILES['productImage']['name'];
                        move_uploaded_file($_FILES['productImage']['tmp_name'], "../img/" . $productImage);
                    }
                }
                if (empty($error)) {
                    updateProduct($productId, $productName, $productPrice, $productColor, $productSize, $brandId, $productImage, $productDesc, $productDiscount);
                    //header("location:http://localhost/WEB17301/du_an_1/admin/index.php?act=sanpham");
                }
            }
            include "./form/form_sua_san_pham.php";
            break;
        case "deletesp":
            if (isset($_GET["id"]) && $_GET["id"]) {
                $id = $_GET["id"];
                deleteProduct($id);
            }
            include "./san_pham.php";
            break;
            // chức năng Loại Hàng
        case "loaihang":
            $category = getCategory();
            if (isset($_POST['search']) && $_POST['search']) {
                $search = $_POST['search'];
                $query = "select * from loai_hang where  ten_loai like '%$search%' or ten_loai = '$search'";
                $category = getAll($query);
            }
            include "./loai_hang.php";
            break;
        case "updatelh":
            include "./form/form_sua_loai_hang.php";
            break;
        case "addlh":
            include "./form/form_them_moi_loai_hang.php";
            break;
            // Chức năng khách hàng
        case "khachhang":
            $users = users();
            if (isset($_POST['search']) && $_POST['search']) {
                $search = $_POST['search'];
                $query = "select * from khach_hang where  email like '%$search%' or email = '$search'";
                $users = getAll($query);
            }
            include "./khach_hang.php";
            break;
        case "updatekh":
            include "./form/form_sua_user.php";
            break;
        case "addkh":
            include "./form/form_them_moi_user.php";
            break;
            // chức năng bình luận
        case "binhluan":
            $comments = comments();
            if (isset($_POST['search']) && $_POST['search']) {
                $search = $_POST['search'];
                var_dump($search);
                $query = "select * from (binh_luan inner join khach_hang on binh_luan.ma_kh = khach_hang.ma_kh) inner join hang_hoa on binh_luan.ma_hh = hang_hoa.ma_hh where  ngay_bl = '$search'";
                $comments = getAll($query);
            }
            include "./binh_luan.php";
            break;
        case "diachi":
            include "./dia_chi.php";
            break;
        default:
            include "./trang_chu.php";
            break;
    }
}
include '../admin/modeladmin/footer.php';
