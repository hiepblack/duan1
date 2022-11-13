<div class="container mx-auto">
    <!-- nav links -->
    <div class="flex px-10">
        <div class="py-2">
            <a href="" class="text-sm px-1 text-slate-600">Trang chủ</a> / <a class="text-sm px-1 text-slate-400" href="">Blog</a>
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

            <div class="">
                <!-- tieude -->
                <h1 class="text-center text-2xl font-medium my-5"><?php echo $blog_one['blogContent']?></h1>
                <div class="flex justify-center">
                    <p class=" text-center">Người viết:<?php echo $tacgia['userName']?>        lúc          <?php echo $blog_one['blogDate']?></p>
                    <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=blog" class="flex pl-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                        </svg>

                        <p class=" text-center ">Tin tức</p>
                    </a>
                </div>
                <!-- image -->
                <div class="flex justify-center my-5">
                    <img src="../img/<?php echo $blog_one['imageBlog']?>" alt="">
                </div>
                <!-- content_blog -->
                <div class="text-left">
                    <p>
                    <?php echo $blog_one['content']?>
                    </p>
                </div>
            </div>
        </section>
    </main>
</div>