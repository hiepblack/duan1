<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white d-flex justify-content-between align-items-center">
        <p class="fs-6 fw-bold">Đơn Hàng</p>
        <!-- /.col-lg-12 -->
    </div>
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="d-flex justify-content-between">
                        <p class="box-title">
                            Bảng Thống Kê Đơn Hàng
                        </p>
                        <form action="http://localhost/WEB17301/du_an_1/admin/index.php?act=donhang" method="get" class="d-flex">
                                <input type="text" name="act" value="donhang" hidden>
                                <select class="col-8" aria-label="Default select example" name="trangThai">
                                    <option value="0">Chọn Trạng Thái Đơn Hàng</option>
                                    <option value="2">Đã Thanh Toán</option>
                                    <option value="1">Chưa Thanh Toán</option>
                                </select>
                                <button type="submit" class="btn btn-primary  col-4">Lọc</button>
                        </form>
                    </div>

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
                                            <?php echo number_format($order['totalMoney']) ?> đ
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
                                            <a href="http://localhost/WEB17301/du_an_1/admin/index.php?act=chitietdonhang&id=<?php echo $order['orderId'] ?>">
                                                <button type="button" class="btn btn-primary text-white">Chi tiết</button>
                                            </a>
                                            <a href="http://localhost/WEB17301/du_an_1/admin/index.php?act=capnhattrangthai&id=<?php echo $order['statusId'] ?>&orderId=<?php echo $order['orderId'] ?>">
                                                <button type="button" class="btn btn-primary text-white">Cập nhật Trạng Thái </button>
                                            </a>
                                            <a onclick="return confirm('Bạn muốn xóa đơn hàng <?php echo $order['orderId'] ?> chứ?')" href="../customer/delete_don_hang.php?id=<?php echo $order['orderId'] ?>">
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