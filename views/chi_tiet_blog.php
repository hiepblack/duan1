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
                        <?php $userid= $value['userId'];?>
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
            <!-- title   -->
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
     <!-- comment -->
     <div class="min-h-min">
        <section class="bg-white container">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Comments</h2>
            </div>
            <div class="w-full mx-auto px-2 flex">
                <!-- form comment -->
                <form class="mb-6 w-1/3" method="post" action="../customer/comment_blog.php?id=<?php echo $id; ?>">
                    <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <label for="comment" class="sr-only">Your comment</label>
                        <textarea id="comment" <?php echo !isset($_SESSION['user']) ? "disabled" : ""; ?> name="comment" rows="6" class="px-0 w-full text-sm text-gray-900 border-0  focus:outline-none " placeholder="Write a comment..." required></textarea>
                    </div>
                    <input type="text" name="tacgia" value="<?php echo $userid?>" hidden>;
                    <button type="submit" <?php echo !isset($_SESSION['user']) ? "disabled" : ""; ?> class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-black">
                        Post comment
                    </button>
                </form>
                <!-- list comment -->
                <div class="w-2/3">
                    <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white pl-2 my-2">
                    Recent Comments
                    </h2>
                    <?php foreach ($comment_blog as $comment) : ?>
                        <article class="pl-4 ml-4 text-base bg-white rounded-lg dark:bg-gray-900 w-full border">
                            <footer class="flex justify-between items-center mb-2">
                                <div class="flex items-center">
                                    <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white"><img class="mr-2 w-6 h-6 rounded-full" src="../img/<?php echo $comment['userImage']?>"><?php echo $comment['userName']?></p>
                                    <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022"><?php echo $comment['comment_date']?></time></p>
                                </div>
                                <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                        </path>
                                    </svg>
                                </button>
                            </footer>
                            <p class="text-gray-500 dark:text-gray-400">
                                <?php echo $comment['comment_contenblog']?>
                            </p>
                        </article>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>
    </div>
</div>