<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        .element {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 100;
            color: white !important;
            font-weight: bold !important;
        }

        .element2 {
            position: absolute;
            top: 50%;
            left: 30%;
            transform: translate(-50%, -50%);
            z-index: 100;
            color: white !important;
            font-weight: bold !important;
        }

        .element3 {
            position: absolute;
            top: 50%;
            right: 10%;
            transform: translate(-50%, -50%);
            z-index: 100;
            color: white !important;
            font-weight: bold !important;
        }

        .container_scroll_header {
            background: #FFFF;
            position: fixed;
            top: 0;
            box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            z-index: 50;
            animation: slide-down 1s;
            animation-duration: 0.5s;
            width: 100%;
            color: black;
        }

        @keyframes slide-down {
            0% {
                opacity: 0;
                transform: translateY(-100%);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    <title>Document</title>
</head>

<body class="font-['Quicksand']">

    <div class=" font-bold text-center w-full min-h-min bg-black text-white p-1">
        Miễn phí vận chuyển đơn hàng trên 500k,Free ship vào T2
    </div>
    <header class="bg-[#F5F5F5] relative w-full min-h-min">
        <!-- slider -->
        <!-- header -->
        <div id="menu1" class="w-full h-40 <?php
                                            if ($_GET['act'] == 'trangchu') {
                                                echo 'bg-transparent hover:bg-[#F5F5F5] absolute inset-0 z-40 hover:text-black text-white transition ease-linear delay-150';
                                            } else {
                                                echo 'bg-[#F5F5F5] text-black';
                                            }
                                            ?> ">
            <!-- menu1 -->
            <div class="container mx-auto bg-transparent ">
                <div class="grid grid-cols-3 gap-4 pt-4">
                    <div class=" h-[45px]  w-[360px]" id="menu1">
                        <form action="" class="w-full flex">
                            <input type="text" placeholder="Tìm kiếm sản phẩm..." class="w-5/6 border-b border-inherit outline-none pl-2 bg-transparent placeholder:text-inherit">
                            <button class="border-inherit border w-1/6 h-[45px] flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </button>
                        </form>
                    </div>
                    <div class=" text-center">
                        <h1 class="text-4xl font-black uppercase">
                            <a href="#">SPORT BICYCLE</a>
                        </h1>
                    </div>
                    <div class=" flex items-center justify-end">
                        <div class="mx-2">
                            <?php
                            if (empty($_SESSION['user'])) {
                                echo '<a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=dangnhap">
                                    <span class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                        </svg>
                                    </span>
                                    <span>Tài Khoản</span>
                                </a>';
                            } else {
                                echo '<a href="../customer/logout_user.php">
                                <span class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                                    </svg>
                                </span>
                                <span>Đăng Xuất</span>
                            </a>';
                            }
                            ?>

                            
                        </div>
                        <div class="mx-2">
                            <a href="#">
                                <span class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                    </svg>
                                </span>
                                <span>Giỏ Hàng</span>
                            </a>
                        </div>
                    </div>
                    <div id="menu3" class="col-span-3 my-2 p-2">
                        <div>
                            <ul class="flex justify-center p-2 align-center text-base uppercase font-bold tracking-wide">
                                <li class="mx-4 hover:border-b-4 border-black">
                                    <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=trangchu">Trang Chủ</a>
                                </li>
                                <li class="mx-4 hover:border-b-4 border-black">
                                    <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=sanpham">Bộ Sưu Tập</a>
                                </li>
                                <li class="mx-4 hover:border-b-4 border-black">
                                    <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=blog">Blog</a>
                                </li>
                                <li class="mx-4 hover:border-b-4 border-black">
                                    <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=gioithieu">Giới Thiệu</a>
                                </li>
                                <li class="mx-4 hover:border-b-4 border-black">
                                    <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=lienhe">Liên Hệ</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- menu2 -->
        <div id="menu2" class="container_scroll_header hidden">
            <div class="container mx-auto  text-black">
                <div class="flex items-center justify-between">
                    <div class=" text-center">
                        <h1 class="text-4xl font-black uppercase">
                            <a href="#">SPORT BICYCLE</a>
                        </h1>
                    </div>

                    <div id="menu3" class="col-span-3 my-2 p-2">
                        <div>
                            <ul class="flex justify-center p-2 align-center text-base uppercase font-bold tracking-wide">
                                <li class="mx-4 hover:border-b-4 border-black">
                                    <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=trangchu">Trang Chủ</a>
                                </li>
                                <li class="mx-4 hover:border-b-4 border-black">
                                    <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=sanpham">Bộ Sưu Tập</a>
                                </li>
                                <li class="mx-4 hover:border-b-4 border-black">
                                    <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=blog">Blog</a>
                                </li>
                                <li class="mx-4 hover:border-b-4 border-black">
                                    <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=gioithieu">Giới Thiệu</a>
                                </li>
                                <li class="mx-4 hover:border-b-4 border-black">
                                    <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=lienhe">Liên Hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex items-center justify-end">
                        <div class="mx-2">
                            <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=dangnhap">
                                <span class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                    </svg>
                                </span>
                                <span>Tài Khoản</span>
                            </a>
                        </div>
                        <div class="mx-2">
                            <a href="#">
                                <span class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                    </svg>
                                </span>
                                <span>Giỏ Hàng</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>