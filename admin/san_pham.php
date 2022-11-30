<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white d-flex justify-content-between align-items-center">
        <p class="fs-6 fw-bold">Sản Phẩm</p>
        <div class="d-flex form-group">
            <form action="" class="mx-2 border" method="post">
                <input type="text" class="p-1" placeholder="tìm kiếm" name="search">
                <button class="btn btn-primary" type="submit">Tìm kiếm</button>
            </form>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Bảng thống kê sản phẩm</h3>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Hành động</th>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Tên Sản Phẩm</th>
                                    <th class="border-top-0">Hình ảnh</th>
                                    <th class="border-top-0">Giá Gốc</th>
                                    <th class="border-top-0">Giá Bán</th>
                                    <th class="border-top-0">Màu Sắc</th>
                                    <th class="border-top-0">Thương hiệu</th>
                                    <th class="border-top-0">Trạng thái</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($products as $product) : ?>
                                    <tr>
                                        <td>
                                            <a href="http://localhost/WEB17301/du_an_1/admin/index.php?act=updatesp&id=<?php echo $product['productId'] ?>">
                                                <button type="button" class="btn btn-primary">Sửa sp</button>
                                            </a>
                                            <a onclick="return confirm_product('<?php echo $product['productName']; ?>')" href="../customer/delete_sanpham.php?id=<?php echo $product['productId'] ?>">
                                                <button type="button" class="btn btn-danger text-white">Xoá sp</button>
                                            </a>
                                        </td>
                                        <td>
                                            <?php echo $product['productId'] ?>
                                        </td>
                                        <td>
                                            <?php echo $product['productName'] ?>
                                        </td>
                                        <td>
                                            <img src="../img/<?php
                                                                $arr = explode(",", $product['productImage']);
                                                                echo $arr[0];
                                                                ?>" alt="" width="50" height="50">
                                        </td>
                                        <td>
                                        <?php echo number_format($product['importPrice'])?>đ</td>
                                        <td>
                                            <?php echo number_format($product['productPrice'])?>đ</td>
                                        <td>
                                            <?php echo $product['productColor'] ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($product['brandId'] == 1) {
                                                echo "Xe đạp địa hình";
                                            } else if ($product['brandId'] == 2) {
                                                echo "Xe đạp thời trang";
                                            } else if ($product['brandId'] == 3) {
                                                echo "Xe đạp thông dụng";
                                            } else {
                                                echo "Chưa xác định";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                        <?php echo $product['productStatus']==1?"Còn Hàng":"Hết Hàng"?>
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