<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white d-flex justify-content-between align-items-center">
        <p class="fs-6 fw-bold">Đơn Hàng</p>
        <div class="d-flex form-group">
            <form action="" class="mx-2 border" method="post">
                <input type="text" class="p-1" placeholder="tìm kiếm" name="search">
                <button class="btn btn-primary">TÌm kiếm</button>
            </form>
            <a href="">
                <button class="btn btn-success text-white">Thêm mới+</button>
            </a>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Bảng Thống Kê Đơn Hàng</h3>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Tên Khách Hàng</th>
                                    <th class="border-top-0">Ngày đặt</th>
                                    <th class="border-top-0">Tổng tiền</th>
                                    <th class="border-top-0">Ghi chú</th>
                                    <th class="border-top-0">Địa Chỉ</th>
                                    <th class="border-top-0">Số Điện Thoại</th>
                                    <th class="border-top-0">Trạng thái</th>
                                    <th class="border-top-0">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($orders as $order) : ?>
                                    <tr>
                                        <td>
                                            <?php echo $order['orderId'] ?>
                                        </td>
                                        <td>
                                            <?php echo $order['tenKh'] ?>
                                        </td>
                                        <td>
                                            <?php echo $order['orderDate'] ?>
                                        </td>
                                        <td>
                                            <?php echo $order['totalMoney'] ?>
                                        </td>
                                        <td><?php echo $order['orderNote'] ?></td>
                                        <td>
                                            <?php echo $order['location'] ?>
                                        </td>
                                        <td>
                                            <?php echo $order['sdt'] ?>
                                        </td>
                                        <td>
                                            <?php checkStatus($order['statusId'])  ?>
                                        </td>
                                        <td>
                                        <?php echo $order['status']==0?"chưa thanh toán":"đã thanh toán";?>
                                        </td>
                                        <td>
                                            <a href="http://localhost/WEB17301/du_an_1/admin/index.php?act=chitietdonhang&id=<?php echo $order['orderId'] ?>">
                                                <button type="button" class="btn btn-primary text-white">Chi tiết</button>
                                            </a>
                                            <a href="http://localhost/WEB17301/du_an_1/admin/index.php?act=capnhattrangthai&id=<?php echo $order['statusId'] ?>&orderId=<?php echo $order['orderId'] ?>">
                                                <button type="button" class="btn btn-primary text-white">Cập nhật Trạng Thái </button>
                                            </a>
                                            <a onclick="return confirm_product('<?php echo $order['orderId'] ?>')" href="../customer/delete_don_hang.php?id=<?php echo $order['orderId'] ?>">
                                                <button type="button" class="btn btn-danger text-white">Xoá</button>
                                            </a>
                                        </td>
                                        
                                    </tr>
                                    <?php endforeach; ?>
                                    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>