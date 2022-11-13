<div class="container mx-auto">
    <!-- nav links -->
    <div class="flex px-10">
        <div class="py-2">
            <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=trangchu" class="text-sm px-1 text-slate-600">Trang chủ</a> / <a class="text-sm px-1 text-slate-400" href="http://localhost/WEB17301/Du_an_1/views/index.php?act=blog">Blog</a>
        </div>
    </div>
    <!-- main -->
    <main class="my-10 flex px-10 w-full">
        <aside class=" w-3/12 px-4">
            <div class="border px-4 py-6 mb-10">
                <h2 class="font-bold text-xl text-center">BÀI VIẾT MỚI NHẤT</h2>
                <hr class="my-3 font-bold w-full ">
                <?php foreach ($blog as $value) : ?>
                    <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=chitiet_blog&id=<?php echo $value['blogId']?>&userid=<?php echo $value['userId']?>" class="flex py-4 items-center">
                        <img class="w-[60px] h-[40px] " src="../img/<?php echo $value['imageBlog'] ?>" alt="">
                        <div class="pl-5">
                            <h4 class="text-sm font-bold mb-2"><?php echo $value['blogContent'] ?></h4>
                            <span class="text-sm"><?php echo $value['blogDate'] ?></span>
                        </div>
                    </a>
                    <hr>
                <?php endforeach; ?>
            </div>
            <div class="border px-4 py-6 ">
                <h2 class="font-bold text-xl text-center">DANH MỤC BLOG</h2>
                <hr class="font-bold my-3 w-full">
                <ul class="">
                    <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=trangchu" class="font-semibold ">
                        <li class="py-3">Trang chủ</li>
                    </a>
                    <hr>
                    <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=sanpham" class="font-semibold ">
                        <li class="py-3">Bộ sưu tập</li>
                    </a>
                    <hr>
                    <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=sanpham" class="font-semibold ">
                        <li class="py-3">Chi tiết sản phẩm</li>
                    </a>
                    <hr>
                    <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=blog" class="font-semibold ">
                        <li class="py-3">Blog</li>
                    </a>
                    <hr>
                    <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=lienhe" class="font-semibold ">
                        <li class="py-3">Liên hệ</li>
                    </a>
                    <hr>
                    <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=gioithieu" class="font-semibold ">
                        <li class="py-3">Giới thiệu</li>
                    </a>
                </ul>
            </div>
        </aside>
        <section class="w-9/12 px-4">
            <h1 class="text-slate-800 text-3xl font-bold my-2">TIN TỨC</h1>
            <?php foreach ($blog as $value) : ?>
                <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=chitiet_blog&id=<?php echo $value['blogId']?>&userid=<?php echo $value['userId']?>">
                    <div class="flex py-4 w-10/12 ">
                        <div class="overflow-hidden">
                            <img class="w-[235px] h-[180px] transition hover:duration-650 hover:ease-in-out hover:scale-[1.2]" src="../img/<?php echo $value['imageBlog'] ?>" alt="">
                        </div>
                        <div class="pl-5 ">

                            <h4 class="text-base font-bold mb-2"><?php echo $value['blogContent'] ?></h4>

                            <span class="text-sm "><?php echo $value['blogDate'] ?></span>
                            <p class="text-sm text-black mt-4">Blog's content</p>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </section>
    </main>
</div>