<?php
$id = $_GET['id'];
$query = "select * from khach_hang where ma_kh =$id";
$user_update = getOne($query);
?>




<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Khách Hàng > Update User</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="#" class="fw-normal">Dashboard</a></li>
                    </ol>

                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-12">
                <div class="white-box">
                    <img width="100%" alt="user" src="../image/<?php echo $user_update['hinh_anh'] ?>">
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material" method="post" action="../customer/update_user.php" enctype="multipart/form-data">
                            <input type="text" name="ma_kh" value="<?php echo $user_update['ma_kh'] ?>" hidden>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Tên User</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" value="<?php echo $user_update['ho_ten'] ?>" class="form-control p-0 border-0" name="ten_kh">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Email</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" value="<?php echo $user_update['email'] ?>" class="form-control p-0 border-0" name="email">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Mật Khẩu</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" value="<?php echo $user_update['mat_khau'] ?>" class="form-control p-0 border-0" name="mat_khau">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Hình Ảnh</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="file" name="hinh_anh" class="form-control p-0 border-0">
                                    <input type="text" name="oldImage" value="<?php echo $user_update['hinh_anh'] ?>" hidden>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="vai_tro" class="col-md-12 p-0">Chọn vai trò của bạn:</label>
                                <select name="vai_tro" id="vai_tro" class="form-select shadow-none p-0 border-0 form-control-line">
                                    <option value="1" <?php echo $user_update['vai_tro'] == 1 ? 'selected' : ''; ?>>Khách hàng</option>
                                    <option value="0" <?php echo $user_update['vai_tro'] == 0 ? 'selected' : ''; ?>>Quản trị viên</option>
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button class="btn btn-success" type="submit">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->

    </div>

    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center"> 2021 © Ample Admin brought to you by <a href="https://www.wrappixel.com/">wrappixel.com</a>
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>