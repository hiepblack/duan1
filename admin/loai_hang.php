<div class="page-wrapper">
    <div class="page-breadcrumb bg-white d-flex justify-content-between align-items-center">
        <p class="fs-6 fw-bold">Loại Hàng</p>
        <div class="d-flex form-group">
            <form action="" class="mx-2 border" method="post">
                <input type="text" class="p-1" placeholder="tìm kiếm" name="search">
                <button class="btn btn-primary" type="submit">TÌm kiếm</button>
            </form>
            <a href="http://localhost/WEB17301/xshop2/admin/index.php?act=addlh">
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
                    <h3 class="box-title">Bảng thống kê Loại hàng</h3>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Tên Loại Hàng</th>
                                    <th class="border-top-0">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($category as $cate): ?>
                                <tr>
                                    <td>
                                        <?php echo $cate['brandId']?>
                                    </td>
                                    <td>
                                        <?php echo $cate['brandName']?>
                                    </td>
                                    
                                    <td>
                                        <a href="http://localhost/WEB17301/du_an_1/admin/index.php?act=updatelh&id=<?php echo $cate['brandId']?>">
                                            <button type="button" class="btn btn-primary">Sửa Lh</button>
                                        </a>
                                        <a onclick="return confirm_product('<?php echo $cate['brandName'];?>')" href="../customer/delete_loai_hang.php?id=<?php echo $cate['brandId']?>">
                                            <button type="button" class="btn btn-danger">Xoá Lh</button>
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