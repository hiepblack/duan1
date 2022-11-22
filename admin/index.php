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
                $yourURL = "http://localhost/WEB17301/Du_an_1/admin/index.php?act=sanpham";
                echo ("<script>location.href='$yourURL'</script>");
            }
            include "./form/form_them_moi_san_pham.php";
            break;
        case "updatesp":
            $productId = $_GET['id'];
            $query = "select * from product where productId = $productId";
            $product = getOne($query);
            $queryCate = "select * from brand";
            $category = getAll($queryCate);
            if (isset($_POST["submit"])) {
                $productName = $_POST['productName'];
                $productPrice = $_POST['productPrice'];
                $productDiscount = $_POST['productDiscount'];
                $productDesc = $_POST['productDesc'];
                $productSize = $_POST['productSize'];
                $productColor = $_POST['productColor'];
                var_dump($_POST);exit();
                // move_uploaded_file($_FILES['productImage']['tmp_name'], "../img/" . $productImage);
                updateProduct($productId, $productName, $productPrice, $productColor, $productSize, $brandId, $productImage, $productDesc, $productDiscount);
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
            include "./loai_hang.php";
            break;
        case "updatelh":
            // var_dump($_POST);die;
            if (isset($_POST["submit"])) {
                $id = $_POST['brandId'];
                $brandName = $_POST["brandName"];
                updateBrand($id, $brandName);
                // header('Location:http://localhost/WEB17301/du_an_1/admin/index.php?act=loaihang');
            }

            include "./form/form_sua_loai_hang.php";
            break;
        case "addlh":
            $error = array();
            if (isset($_POST["submit"])) {
                if ($_POST["brandName"] != "") {
                    $brandName = $_POST["brandName"];
                    $query = "select * from brand where brandName = '$brandName'";
                    $check = getOne($query);
                    if (empty($check)) {
                        addBrand($brandName);
                        // header('Location:http://localhost/WEB17301/du_an_1/admin/index.php?act=loaihang');
                    } else {
                        $error['brand'] = "Vui lòng chọn tên khác!";
                    }
                } else {
                    $error['brand'] = "Vui lòng nhập tên loại!";
                }
            }
            include "./form/form_them_moi_loai_hang.php";
            break;
        case "deletelh":
            if (isset($_GET['id'])) {
                $id = $_GET["id"];
                deleteBrand($id);
            }
            include "./loai_hang.php";
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
