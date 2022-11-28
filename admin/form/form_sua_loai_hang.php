<?php
    $id = $_GET['id'];
    $query = "select * from brand where brandId = $id";
    $category = getOne($query);
?>

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Danh mục > Update Danh mục</h4>
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
            
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material" method="post" action="./index.php?act=updatelh" enctype="multipart/form-data">
                            <input type="text" name="brandId" value="<?php echo $category['brandId'] ?>" hidden>
                            <?php  ?>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Tên Loại Hàng</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" value="<?php echo $category['brandName'] ?>" class="form-control p-0 border-0" name="brandName">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button class="btn btn-success" name="submit" type="submit">Update Loại Hàng</button>
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
