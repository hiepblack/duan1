<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Sản Phẩm > Add sản phẩm</h4>
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
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-12 " id="boxImg">
                <p>Preview Image</p>
                <div class="white-box">
                    <img width="100%" alt="user" src="" class="prev">
                </div>
                <div class="white-box">
                    <img width="100%" alt="user" src="" class="prev">
                </div>
                <div class="white-box">
                    <img width="100%" alt="user" src="" class="prev">
                </div>
                <div class="white-box">
                    <img width="100%" alt="user" src="" class="prev">
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-material" method="post" enctype="multipart/form-data" action="" onsubmit="return validate();">
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Tên Sản Phẩm</label><br>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="productName" id="productName">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="dongia" class="col-md-12 p-0">Đơn Giá</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="number" class="form-control p-0 border-0" name="productPrice" id="productPrice">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="giamgia" class="col-md-12 p-0">Giảm giá</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="number" class="form-control p-0 border-0" name="productDiscount" id="productDiscount">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="giamgia" class="col-md-12 p-0">Kích cỡ</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="number" class="form-control p-0 border-0" name="productSize" id="productSize">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="giamgia" class="col-md-12 p-0">Màu sắc</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="productColor" id="productColor">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Hình Ảnh</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="file" name="productImage[]" class="form-control p-0 border-0" multiple id="picture">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Mô Tả</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <textarea rows="5" class="form-control pl-4 border-0" name="productDesc" id="productDesc">
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
                                            <option value="<?php echo $cate['brandId'] ?>"> <?php echo $cate['brandName'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button class="btn btn-success" type="submit" name="submit">Add Sản Phẩm</button>
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
    <footer class="footer text-center"> 2022 © Admin brought to you by <a href="https://facebook.com/ducduc.1002">Group 8</a>
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<script>
    var picture = document.querySelector("#picture");
    var boxImg = document.querySelector("#boxImg");
    picture.addEventListener("change", function(e) {
        var arrayImg = picture.files;
        if(arrayImg.length <=4){
            var img = document.querySelectorAll(".prev");
            for (var i = 0; i < img.length; i++) {
                img[i].src = URL.createObjectURL(picture.files[i]);
            }
        }else{
            alert("dcm");
            return;
        }
    })
</script>
<script src="../js/validate.js"></script>