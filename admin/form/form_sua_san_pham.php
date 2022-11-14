




<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Sản Phẩm > Update sản phẩm</h4>
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
                    <img width="100%" alt="user" src="../img/<?php echo $product['productImage'] ?>">
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-12">
                <div class="card">
                    <div class="card-body">
                    <form class="form-horizontal form-material" method="post" enctype="multipart/form-data" action="./index.php?act=updatesp">
                            <input type="hidden" name="oldImage" value="<?php echo $product['productImage'];?>">
                            <input type="hidden" name="productId" value="<?php echo $product['productId'];?>">
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Tên Sản Phẩm</label><br>
                                <p class="alert alert-warning" <?php echo isset($error['name'])?"":"hidden"?>><?php echo isset($error['name'])?$error['name']:""?></p>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text"  class="form-control p-0 border-0" name="productName" value="<?php echo isset($_POST['productName'])?$_POST['productName']:$product['productName']?>" >
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="dongia" class="col-md-12 p-0">Đơn Giá</label>
                                <p class="alert alert-warning" <?php echo isset($error['price'])?"":"hidden"?>><?php echo isset($error['price'])?$error['price']:""?></p>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="number"  class="form-control p-0 border-0" name="productPrice" value="<?php echo isset($_POST['productPrice'])?$_POST['productPrice']:$product['productPrice']?>" id="example-email">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="giamgia" class="col-md-12 p-0">Giảm giá</label>
                                <p class="alert alert-warning" <?php echo isset($error['discount'])?"":"hidden"?>><?php echo isset($error['discount'])?$error['discount']:""?></p>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="number"  class="form-control p-0 border-0" name="productDiscount" id="example-email" value="0">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="giamgia" class="col-md-12 p-0">Kích cỡ</label>
                                <p class="alert alert-warning" <?php echo isset($error['size'])?"":"hidden"?>><?php echo isset($error['size'])?$error['size']:""?></p>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="number"  class="form-control p-0 border-0" name="productSize" id="example-email" value="<?php echo isset($_POST['productSize'])?$_POST['productSize']:$product['productSize']?>">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="giamgia" class="col-md-12 p-0">Màu sắc</label>
                                <p class="alert alert-warning" <?php echo isset($error['color'])?"":"hidden"?>><?php echo isset($error['color'])?$error['color']:""?></p>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text"  class="form-control p-0 border-0" name="productColor" id="example-email" value="<?php echo isset($_POST['productColor'])?$_POST['productColor']:$product['productColor']?>">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Hình Ảnh</label>
                                <p class="alert alert-warning" <?php echo isset($error['image'])?"":"hidden"?>><?php echo isset($error['image'])?$error['image']:""?></p>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="file" name="productImage" class="form-control p-0 border-0">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Mô Tả</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <textarea rows="5" class="form-control pl-4 border-0" name="productDesc">
                                        <?php echo isset($_POST['productDesc'])?$_POST['productDesc']:$product['productDesc']?>
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-sm-12">Danh mục</label>
                                <div class="col-sm-12 border-bottom">
                                    <select class="form-select shadow-none p-0 border-0 form-control-line" name="brandId">
                                        <?php
                                        $category = getAll("select * from brand");
                                        foreach ($category as $cate) :
                                        ?>
                                            <option <?php echo $cate['brandId']==$product['brandId']?"checked":"" ?> value="<?php echo $cate['brandId'] ?>"> <?php echo $cate['brandName'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button class="btn btn-success" type="submit" name="submit">Update Sản Phẩm</button>
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