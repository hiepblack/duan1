<div class="container mx-auto">
    <div class="my-4">
        <span>Trang Chủ /</span>
        <span>Danh Mục /</span>
        <span>Tất cả sản phẩm</span>
    </div>
    <div class="my-4 w-full">
        <div class="my-4">
            <h1 class="font-bold text-2xl">Tất cả sản phẩm</h1>
        </div>
        <div class="flex my-8 min-h-min">
            <div class="w-1/5 flex items-center">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z" />
                    </svg>
                </span>
                <p class="text-xl font-bold uppercase">Bộ Lọc</p>
            </div>
            <form class="grid grid-cols-4 w-4/5 gap-4 h-10" action="http://localhost/WEB17301/Du_an_1/views/index.php?act=sanpham" method="post">
                <select class="form-control" name="danhmuc">
                    <option value="">Danh Mục</option>
                    <option value="1">Xe đạp địa hình</option>
                    <option value="2">Xe đạp Thời Trang</option>
                    <option value="3">Xe đạp thể thao</option>
                </select>
                <select class="form-control" name="gia">
                    <option value="">Giá Sản Phẩm</option>
                    <option value="1">Từ 500.000 - 1.000.000</option>
                    <option value="2">Từ 1.000.000 - 1.500.000</option>
                    <option value="3">Từ 1.500.000 - 2.000.000</option>
                    <option value="4">Trên 2.000.000</option>
                </select>
                <select class="form-control" name="size">
                    <option value="">Size</option>
                    <option value="49">Size :49cm</option>
                    <option value="50">Size :50cm</option>
                    <option value="51">Size :51cm</option>
                </select>
                <button type="submit" class=" w-full py-1 text-center bg-black text-white button_slide slide_right" name ="search">
                    Tìm Kiếm
                        </button>
            </form>
        </div>
        <!-- sản phẩm -->
        <div class="grid grid-cols-4 gap-4 my-8 border filter_data">
            <?php foreach ($products as $product) : ?>
                <div class="">
                    <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=chitietsanpham&id=<?php echo $product['productId'] ?>" class="">
                        <img class="sm:h-64 md:h-96" src="../img/<?php
                                                                    $arr = explode(",", $product['productImage']);
                                                                    echo $arr[0];
                                                                    ?>" alt="">
                        <div class="">
                            <a href="" class="text-base font-semibold"><?php echo $product['productName'] ?></a>
                            <div class="flex-col py-2 justify-center">
                                <span class="text-red-600  font-semibold"><?php echo $product['productPrice'] ?></span>
                                <span class="text-slate-400 line-through text-sm"><?php echo $product['productDiscount'] ?></span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<style>
    #parent:hover #child2 {
        display: block;
    }

    #child2 {
        display: none;
    }
    .button_slide {
            color: #FFF;
            display: inline-block;
            cursor: pointer;
            box-shadow: inset 0 0 0 0 #faf5f8;
            -webkit-transition: ease-out 0.4s;
            -moz-transition: ease-out 0.4s;
            transition: ease-out 0.4s;
        }
        .slide_right:hover {
            box-shadow: inset 800px 0 0 0 #faf5f8;
            color: black;
        }
</style>