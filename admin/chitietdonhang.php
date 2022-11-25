<style>
.title{
    display:flex;
    justify-content:space-around;
    align-items:center;
}
.title img{
    width: 70px;
}
    </style>
<div class="page-wrapper" id="table">
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
                    <div class="title">
                        <h4>Công Ty TNHH Sport Bicycle</h4>
                    </div>
                    <h3 class="box-title text-center">Hoá Đơn Chi Tiết</h3>
                    <h3 class="box-title text-center">-------oOo-------</h3>
                    <p class="box-title">Tên Khách Hàng : <?php echo $results[0]['tenKh']?></p>
                    <p class="box-title">Địa Chỉ : <?php echo $results[0]['location']?></p>
                    <p class="box-title">Số Điện Thoại : <?php echo $results[0]['sdt']?></p>
                                                    
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Ngày đặt</th>
                                    <th class="border-top-0">Sản Phẩm</th>
                                    <th class="border-top-0">Số Lượng</th>
                                    <th class="border-top-0">Thành Tiền</th>
                                    <th class="border-top-0">Ghi chú</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($results as $result) : ?>
                                    <?php $num += $result['quantity']; ?>

                                    <tr>
                                        <td>
                                            <?php echo $result['orderId'] ?>
                                        </td>
                                        <td>
                                            <?php echo $result['orderDate'] ?>
                                        </td>
                                        <td>
                                            <?php echo $result['productName'] ?>
                                        </td>
                                        <td><?php echo $result['quantity'] ?></td>
                                        <td>
                                            <?php echo number_format($result['totalMoney'],0,",",".")?>
                                        </td>
                                        <td>
                                            <?php echo $result['orderNote'] ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <p class="box-title">Tổng Số Lượng:<?php echo $num; ?></p>
                        <p class="box-title">Tổng Tiền:<?php echo number_format($results[0]['money'],0,",",".") ?></p>
                    </div>
                </div>
                <button type="button" class="btn btn-primary text-white" onclick="return in_hoa_don();">In Hoá Đơn</button>
                <a href="http://localhost/WEB17301/du_an_1/admin/index.php?act=donhang">
                    <button type="button" class="btn btn-danger text-white">Trở Lại</button>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
    function in_hoa_don() {
        var body = document.getElementById("body").innerHTML;
        var white_box = document.querySelector(".white-box").innerHTML;
        document.getElementById("body").innerHTML = white_box;
        window.print();
        document.getElementById("body").innerHTML = body;
    }
</script>