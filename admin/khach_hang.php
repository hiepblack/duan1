<div class="page-wrapper">
    <div class="page-breadcrumb bg-white d-flex justify-content-between align-items-center">
        <p class="fs-6 fw-bold">Khách Hàng</p>
        <div class="d-flex form-group">
            <form action="" class="mx-2 border" method="post">
                <input type="text" class="p-1" placeholder="tìm kiếm" name="search">
                <button class="btn btn-primary" type="submit">TÌm kiếm</button>
            </form>
            <a href="http://localhost/WEB17301/xshop2/admin/index.php?act=addkh">
                <button class="btn btn-primary">Thêm mới+</button>
            </a>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Bảng thống kê Khách Hàng</h3>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Tên khách hàng</th>
                                    <th class="border-top-0">Email</th>
                                    <th class="border-top-0">Mật Khẩu</th>
                                    <th class="border-top-0">Hình ảnh</th>
                                    <th class="border-top-0">Vai trò</th>
                                    <th class="border-top-0">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $user): ?>
                                <tr>
                                    <td>
                                        <?php echo $user['userId']?>
                                    </td>
                                    <td>
                                        <?php echo $user['userName']?>
                                    </td>
                                    <td>
                                        <?php echo $user['userEmail']?>
                                    </td>
                                    <td>
                                        <?php echo $user['userPassword']?>
                                    </td>
                                    <td>
                                        <img src="../img/<?php echo $user['userImage']?>" alt="" width="50" height="50">
                                    </td>
                                    <td>
                                        <?php 
                                            if($user['roleId'] == 1){
                                                echo "Khách hàng vãng lai";
                                            }else if($user['roleId'] == 2){
                                                echo "Khách hàng thành viên";
                                            }else if($user['roleId'] ==3){
                                                echo "Nhân viên";
                                            }else{
                                                echo "Quản trị viên";
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="http://localhost/WEB17301/xshop2/admin/index.php?act=updatekh&id=<?php echo $user['userId'];?>">
                                            <button type="button" class="btn btn-primary">Sửa Kh</button>
                                        </a>
                                        <a onclick="return confirm_product('<?php echo $user['userName'];?>')" href="../customer/delete_user.php?id=<?php echo $user['userId'];?>">
                                            <button type="button" class="btn btn-danger">Xoá Kh</button>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>