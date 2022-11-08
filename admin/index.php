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
        case "updatesp":
            include "./form/form_sua_san_pham.php";
            break;
        case "addsp":
            $queryCate = "select * from loai_hang";
            $category = getAll($queryCate);
            include "./form/form_them_moi_san_pham.php";
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
