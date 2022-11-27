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
                $query = "select * from product where  productName like '%$search%' or productName = '$search'";
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
                $brandId = $_POST['brandId'];
                $productImage = $_FILES['productImage']['name'];
                $stringImage = '';
                $oldImage = $_POST['oldImage'];
                $numberArrayImage = count($productImage);
                if (strlen($productImage[0]) > 0) {
                    foreach ($productImage as $key => $value) {
                        $stringImage .= $value;
                        $stringImage .= "";
                        if ($key !== $numberArrayImage - 1) {
                            $stringImage .= ",";
                        }
                        move_uploaded_file($_FILES['productImage']['tmp_name'][$key], "../img/" . $value);
                    }
                } else {
                    $stringImage = $oldImage;
                }
                updateProduct($productId, $productName, $productPrice, $productColor, $productSize, $brandId, $stringImage, $productDesc, $productDiscount);
                $yourURL = "http://localhost/WEB17301/Du_an_1/admin/index.php?act=sanpham";
                echo ("<script>location.href='$yourURL'</script>");
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
                        $yourURL = "http://localhost/WEB17301/Du_an_1/admin/index.php?act=loaihang";
                        echo ("<script>location.href='$yourURL'</script>");
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
            if (isset($_POST['update'])) {
                $id = $_POST['ma_kh'];
                $userName = $_POST['ten_kh'];
                $password = $_POST['mat_khau'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $date = $_POST['date'];
                $location = $_POST['location'];
                $vai_tro = $_POST['vai_tro'];
                $sex = $_POST['sex'];
                $oldImage = $_POST['oldImage'];
                $userImage = $_FILES['userImage']['name'];
                if (strlen($userImage) > 0) {
                    move_uploaded_file($_FILES['userImage']['tmp_name'], '../img/' . $userImage);
                } else {
                    $userImage = $oldImage;
                }
                $sql = "UPDATE user SET userName='$userName',userEmail='$email',userPassword='$password',userGender='$sex',roleId=$vai_tro,userBirthday='$date',userImage='$userImage',sdt='$sdt',location='$location' where userId = $id";
                connect($sql);
                $yourURL = "http://localhost/WEB17301/Du_an_1/admin/index.php?act=khachhang";
                echo ("<script>location.href='$yourURL'</script>");
            }
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
                $query = "select * from (comment inner join user on comment.userId =user.userId) inner join product on comment.productId = product.productId where  commentDate = '$search'";
                $comments = getAll($query);
            }
            include "./binh_luan.php";
            break;
            case "binhluan_blog":
                $comment_blog=comment_blog();
                if (isset($_POST['search']) && $_POST['search']) {
                    $search = $_POST['search'];
                    var_dump($search);
                    $query = "select * from (comment_blog inner join user on comment_blog.userId = user.userId) inner join blog on comment_blog.blogId = blog.blogId  where  comment_date = '$search'";
                    $comments = getAll($query);
                }
                include "./binhluan_blog.php";
                break;
        case "diachi":
            include "./dia_chi.php";
            break;
        case "donhang":
            if (isset($_POST["submit"])) {
                $id = $_POST["id"];
                $orderId = $_POST["orderId"];
                $query = "UPDATE `orders` SET statusId = $id WHERE orderId = $orderId";
                connect($query);
            }
            $orders = orders();
            $query = "select * from statusorder";
            $statusOrder = getAll($query);
            include "./don_hang.php";
            break;
        case "capnhattrangthai":
            $id = $_GET['id'];
            $query1 = "SELECT * FROM `statusorder`";
            $category = getAll($query1);
            var_dump($id);
            // echo "<pre>";
            // var_dump($category);
            include "./form/form_sua_trang_thai.php";
            break;
        case "chitietdonhang":
            $num = 0;
            $id = $_GET['id'];
            $query = "select orders.tenKh,orders.location,orders.sdt,orders.orderDate, orders.orderNote, orders.totalMoney as money, orderdetail.*,product.productName as productName from orders
            inner join  orderdetail on orders.orderId = orderdetail.orderId
            inner join product on product.productId = orderdetail.productId
            where orders.orderId = $id
            ";
            $results = getAll($query);
            // echo "<pre>";
            // var_dump($results);
            include "./chitietdonhang.php";
            break;
        default:
            include "./trang_chu.php";
            break;
    }
}
include '../admin/modeladmin/footer.php';
