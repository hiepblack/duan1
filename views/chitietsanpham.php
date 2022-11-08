<div class="container mx-auto ">
        <div class="p-2">
            <a href="" class="text-sm px-1 text-slate-600">Trang chủ</a> / <a class="text-sm px-1 text-slate-400" href="">Sản phẩm</a> / <a class="text-sm px-1 text-slate-400" href="">Xe đạp mẫu 1</a>
        </div>
        <div class="md:flex my-5">
            <!-- main -->
                <div class="w-full md:w-6/12 flex h-full md:h-[460px]">
                    <div class="w-1/6 mx-4 grid grid-rows-5 gap-3">
                        <img src="../img/item_1.webp" class="md:w-20 border" alt="">
                        <img src="../img/item_1.webp" class="md:w-20 border" alt="">
                        <img src="../img/item_1.webp" class="md:w-20 border" alt="">
                        <img src="../img/item_1.webp" class="md:w-20 border" alt="">
                        <img src="../img/item_1.webp" class="md:w-20 border" alt="">
                    </div>
                    <div class="w-5/6 mx-4">
                        <img src="../img/item_1.webp" class="sm:w-full border" alt="">
                    </div>
                </div>
                <div class="w-full md:w-6/12 p-2 mx-4">
                    <h1 class="px-2 font-bold text-xl py-3">XE ĐẠP MẪU 1</h1>
                    <hr>
                    <p class="py-3 flex items-center">
                        <span class="text-red-600 px-2 font-semibold">$400.00</span>
                        <span class="text-slate-400 line-through text-sm">$300.00</span>
                    </p>
                    <hr>
                    <!-- form de dat hang -->
                    <form class="py-3" action="" method="">
                    <span class="px-2">MÀU SẮC</span> <br>
                    <div class="flex py-2 items-center">
                        <?php foreach ($arrayColor as $valueColor): ?>
                        <input  type="checkbox" id="<?php echo $valueColor?>" name="<?php echo $valueColor?>" value="<?php echo $valueColor?>">
                        <label class="font-bold text-red-500 pr-4 pl-1 text-sm" for="<?php echo $valueColor?>"><?php echo $valueColor?></label><br>
                        <?php endforeach; ?>
                    </div>
                    <hr class="mb-3">
                    <span class="px-2">KÍCH CỠ</span> <br>
                    <div class="flex py-2 items-center">
                        <input  type="checkbox" id="48" name="size" value="48">
                        <label class="font-bold text-slate-900 pr-4 pl-1 text-sm" for="48">48cm</label><br>
                    </div>
                    <hr>
                    <div class="my-3 flex">
                        <button  class="h-8 w-8 bg-slate-200 font-bold">-</button>
                        <span id="counting" class="border text-center w-[70px] font-bold"></span>
                        <button  class="h-8 w-8 bg-slate-200 font-bold">+</button>
                    </div>
                    <button type="submit" class="my-3 w-full py-4 text-center bg-red-600 text-white ">THÊM VÀO GIỎ
                        HÀNG</button>
                </form>
                    <!-- mo ta sp -->
                    <div class="">
                        <h3 class="font-bold text-xl my-2">Mô tả</h3>
                        <p class="text-slate-700">
                            Màu xanh dương nhã nhặn
                            <br>    Xuất xứ từ Nhật Bản
                            <br>    Dòng xe đạp mini cao cấp
                            <br>    Chất liệu cao cấp, bền đẹp
                            <br>    Phù hợp để đi học, đi làm
                            <br>    Khung xe bằng hợp kim đồng bền bỉ
                            <br>    Sản phẩm chưa được lắp hoàn chỉnh (Khách hàng cần lắp bánh trước, ghi đông, bàn đạp và giỏ xe)
                        </p>
                        <h3 class="font-bold text-xl my-2">Cấu tạo chiếc xe gồm:</h3>
                        <p class="text-slate-700">
                            Màu xanh dương nhã nhặn
                            <br>    Xuất xứ từ Nhật Bản
                            <br>    Dòng xe đạp mini cao cấp
                            <br>    Chất liệu cao cấp, bền đẹp
                            <br>    Phù hợp để đi học, đi làm
                            <br>    Khung xe bằng hợp kim đồng bền bỉ
                            <br>    Sản phẩm chưa được lắp hoàn chỉnh (Khách hàng cần lắp bánh trước, ghi đông, bàn đạp và giỏ xe)
                        </p>
                    </div>
                </div>
        </div>
        <!-- ket thuc main -->
        <!-- san pham lien quan -->
        <div class="my-10">
            <h2 class="text-3xl font-bold text-center">SẢN PHẨM LIÊN QUAN</h2>
            <div class="grid grid-cols-2 md:grid-cols-5 gap-2">
                <div class="p-4">
                    <img class="" src="../img/item_1.webp" alt="">
                    <div class="">
                        <a href="" class="text-base font-semibold">XE ĐẠP MẪU 1</a>
                        <div class="flex-col py-2 justify-center">
                            <span class="text-red-600  font-semibold">$400.00</span>
                            <span class="text-slate-400 line-through text-sm">$300.00</span>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <img class="" src="../img/item_1.webp" alt="">
                    <div class="">
                        <a href="" class="text-base font-semibold">XE ĐẠP MẪU 1</a>
                        <div class="flex-col py-2 justify-center">
                            <span class="text-red-600  font-semibold">$400.00</span>
                            <span class="text-slate-400 line-through text-sm">$300.00</span>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <img class="" src="../img/item_1.webp" alt="">
                    <div class="">
                        <a href="" class="text-base font-semibold">XE ĐẠP MẪU 1</a>
                        <div class="flex-col py-2 justify-center">
                            <span class="text-red-600  font-semibold">$400.00</span>
                            <span class="text-slate-400 line-through text-sm">$300.00</span>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <img class="" src="../img/item_1.webp" alt="">
                    <div class="">
                        <a href="" class="text-base font-semibold">XE ĐẠP MẪU 1</a>
                        <div class="flex-col py-2 justify-center">
                            <span class="text-red-600  font-semibold">$400.00</span>
                            <span class="text-slate-400 line-through text-sm">$300.00</span>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <img class="" src="../img/item_1.webp" alt="">
                    <div class="px-2">
                        <a href="" class="text-base font-semibold ">XE ĐẠP MẪU 1</a>
                        <div class="flex-col py-2 justify-center">
                            <span class="text-red-600 font-semibold">$400.00</span>
                            <span class="text-slate-400 line-through text-sm">$300.00</span>
                        </div>
                    </div>
                </div>
                
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