<?php
   
?>
<div class="page-wrapper">
    <div class="page-breadcrumb bg-white d-flex justify-content-between align-items-center">
        <p class="fs-6 fw-bold">Bình Luận</p>
        <div class="d-flex form-group">
            <form action="" class="mx-2 border" method="post">
                <input type="date" class="p-1" placeholder="tìm kiếm" name="search">
                <button class="btn btn-primary" type="submit">TÌm kiếm</button>
            </form>
            <button class="btn btn-primary">Thêm mới+</button>
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
                    <h3 class="box-title">Bảng thống kê Bình Luận</h3>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Tên khách hàng</th>
                                    <th class="border-top-0">Nội dung</th>
                                    <th class="border-top-0">Sản Phẩm</th>
                                    <th class="border-top-0">Ngày Bình Luận</th>
                                    <th class="border-top-0">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($comments as $comment): ?>
                                <tr>
                                    <td>
                                        <?php echo $comment['commentId']?>
                                    </td>
                                    <td>
                                        <?php echo $comment['userName']?>
                                    </td>
                                    <td>
                                        <?php echo $comment['commentContent']?>
                                    </td>
                                    <td>
                                        <?php echo $comment['productName']?>
                                    </td>
                                    <td>
                                        <?php echo $comment['commentDate']?>
                                    </td>
                                    <td>
                                        <a href="">
                                            <button type="button" class="btn btn-primary">Sửa Bl</button>
                                        </a>
                                        <a href="../customer/delete_comment.php?id=<?php echo $comment['commentId']?>">
                                            <button type="button" class="btn btn-danger">Xoá Bl</button>
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