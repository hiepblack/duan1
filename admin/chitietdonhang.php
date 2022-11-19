<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white d-flex justify-content-between align-items-center">
        <p class="fs-6 fw-bold">Chi Tiết Đơn Hàng</p>

        <!-- /.col-lg-12 -->
    </div>
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Bảng Thống Kê Chi Tiết</h3>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Tên Khách Hàng</th>
                                    <th class="border-top-0">Ngày đặt</th>
                                    <th class="border-top-0">Sản Phẩm</th>
                                    <th class="border-top-0">Số Lượng</th>
                                    <th class="border-top-0">Thành Tiền</th>
                                    <th class="border-top-0">Ghi chú</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($results as $result) : ?>
                                    <?php $num +=$result['quantity'];?>
                                    
                                    <tr>
                                        <td>
                                            <?php echo $result['orderId'] ?>
                                        </td>
                                        <td>
                                            <?php echo $result['tenKh'] ?>
                                        </td>
                                        <td>
                                            <?php echo $result['orderDate'] ?>
                                        </td>
                                        <td>
                                            <?php echo $result['productName'] ?>
                                        </td>
                                        <td><?php echo $result['quantity'] ?></td>
                                        <td>
                                            <?php echo $result['totalMoney'] ?>
                                        </td>
                                        <td>
                                            <?php echo $result['orderNote'] ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <p>Tổng Số Lượng:<?php  echo $num;?></p>
                        <p>Tổng Tiền:<?php echo $results[0]['money'] ?></p>
                        <p>
                            <a href="../customer/in_don_hang.php?id=<?php echo $id;?>">
                                <button type="button" class="btn btn-primary text-white">In Hoá Đơn</button>
                            </a>
                            <a href="http://localhost/WEB17301/du_an_1/admin/index.php?act=donhang">
                                <button type="button" class="btn btn-danger text-white">Trở Lại</button>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>