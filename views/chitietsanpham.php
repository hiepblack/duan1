<div class="container mx-auto ">
    <div class="p-2">
        <a href="" class="text-sm px-1 text-slate-600">Trang chủ</a> / <a class="text-sm px-1 text-slate-400" href="">Sản phẩm</a> / <a class="text-sm px-1 text-slate-400" href="">Xe đạp mẫu 1</a>
    </div>
    <div class="md:flex my-5">
        <!-- main -->
        <div class="w-full md:w-6/12 flex h-full md:h-[460px]">
            <div class="w-1/6 mx-4 grid grid-rows-5 gap-3">
                <img src="../img/<?php
                                    $arr = explode(",", $one_product['productImage']);
                                    echo $arr[0];
                                    ?>" class="md:w-20 border img" alt="" >
                <img src="../img/<?php echo $arr[2]; ?>" class="md:w-20 border img" alt="">
                <img src="../img/<?php echo $arr[1]; ?>" class="md:w-20 border img" alt="">
                <img src="../img/<?php echo $arr[3]; ?>" class="md:w-20 border img" alt="">
                <img src="../img/<?php echo $arr[2]; ?>" class="md:w-20 border img" alt="">
            </div>
            <div class="w-5/6 mx-4">
                <img src="../img/<?php
                                    $arr = explode(",", $one_product['productImage']);
                                    echo $arr[0];
                                    ?>" class="sm:w-full border" alt="" id ="imgProduct">
            </div>
        </div>
        <div class="w-full md:w-6/12 p-2 mx-4">
            <h1 class="px-2 font-bold text-xl py-3"><?php echo $one_product['productName'] ?></h1>
            <hr>
            <p class="py-3 flex items-center">
                <span class="text-red-600 px-2 font-semibold">$<?php echo $one_product['productPrice'] ?></span>

            </p>
            <hr>
            <!-- form de dat hang -->
            <form class="p-2" action="../customer/add_cart.php" method="post">
                <input type="text" name = "productName" value = "<?php echo $one_product['productName']?>" hidden>
                <input type="text" name = "productId" value = "<?php echo $one_product['productId']?>" hidden>
                <input type="text" name = "productPrice" value = "<?php echo $one_product['productPrice']?>" hidden>
                <input type="text" name = "productImage" value = "<?php echo $arr[0]?>" hidden>
                <span class="text-black">MÀU SẮC</span> <br>
                <div class="flex py-2 items-center">
                    <?php
                    $arrcolor = explode(",", $one_product['productColor']);
                    ?>
                    <input type="radio" id="" name="productColor" value="<?php echo  $arrcolor[0] ?>" checked>
                    <label class="font-bold text-green-500 pr-4 pl-1 text-sm" for="<?php echo $arrcolor[0] ?>"><?php echo  $arrcolor[0] ?></label><br>
                    <input type="radio" id="" name="productColor" value="<?php echo  $arrcolor[1] ?>">
                    <label class="font-bold text-red-500 pr-4 pl-1 text-sm" for="<?php echo $arrcolor[1] ?>"><?php echo  $arrcolor[1] ?></label><br>
                </div>
                <hr class="mb-3">
                <span class="">KÍCH CỠ</span> <br>
                <div class="flex py-2 items-center">
                    <input type="radio" id="48" name="productSize" value="<?php echo $one_product['productSize']; ?>" checked>
                    <label class="font-bold text-slate-900 pr-4 pl-1 text-sm" for="48">
                        <?php echo $one_product['productSize']; ?> cm
                    </label><br>
                </div>
                <hr>
                <div class="my-3 flex">
                    <button type="button" class="h-8 w-8 bg-slate-200 font-bold" onclick="tru();">-</button>
                    <span id="counting" class="border text-center w-[70px] font-bold flex justify-center items-center">
                        <input type="text" name="productSl" class="w-1/3 h-full " value = "1" id="count">
                    </span>
                    <button type="button" class="h-8 w-8 bg-slate-200 font-bold" onclick="cong()">+</button>
                </div>
                <button type="submit" class="my-3 w-full py-4 text-center bg-red-600 text-white button_slide slide_right" name="submit">THÊM VÀO GIỎ
                    HÀNG</button>
            </form>
            <!-- mo ta sp -->
            <div class="p-2">
                <h3 class="font-bold text-xl my-2">Mô tả</h3>
                <h3 class="font-bold text-xl my-2">Cấu tạo chiếc xe gồm:</h3>
                <p class="text-slate-700 w-full text-justify">
                    <?php echo $one_product['productDesc']?>
                </p>
                
            </div>
        </div>
    </div>
    <!-- ket thuc main -->
    <!-- san pham lien quan -->
    <div class="my-10">
        <h2 class="text-3xl font-bold text-center">SẢN PHẨM LIÊN QUAN</h2>
        <div class="grid grid-cols-2 md:grid-cols-5 gap-2 ">
            <?php foreach ($products as $value) : ?>
                <div class="p-4 border my-2">
                    <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=chitietsanpham&id=<?php echo $value['productId'] ?>">
                        <img class="" src="../img/<?php
                                                $arr = explode(",", $value['productImage']);
                                                echo $arr[0];
                                                ?>" alt="">
                    <div class="">
                        <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=chitietsanpham&id=<?php echo $value['productId'] ?>" class="text-base font-semibold"><?php echo $value['productName'] ?></a>
                        <div class="flex-col py-2 justify-center">
                            <span class="text-red-600  font-semibold">$<?php echo $value['productPrice'] ?></span>
                        </div>
                    </div>
                </a>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<style>
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
<script>
var i=1;
function cong(){
   i++;
   if(i>10){
    i=10;
   };
   document.querySelector('#count').value = i;
}
function tru(){
   i--;
   if(i<1) {
    i=1;
   };
   document.querySelector('#count').value = i;
}

var img = document.querySelectorAll('.img');
var imgProduct = document.querySelector('#imgProduct');
console.log(imgProduct.src);
img.forEach(function(image){
    image.addEventListener('click',function(e){
        imgProduct.src = image.src;
    })
})
</script>