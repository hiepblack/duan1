<div class="text-center mx-auto w-[500px] my-4">
        <h3 class="text-4xl font-bold my-5">Tạo tài khoản</h3>
        <form action="">
            <input type="text" name="" id="" placeholder="Họ" class="px-5 bg-[#f5f5f5] h-[50px] w-[500px] my-3 outline-none">
            <input type="text" name="" id="" placeholder="Tên" class="px-5 bg-[#f5f5f5] h-[50px] w-[500px] my-3 outline-none">
            <div class="text-left">
                <input type="radio" class="mr-3" name="sex" value="nam">nam
                <input type="radio" name="sex" value="nữ"> nữ
            </div>
            <input type="date" name="" id="" placeholder="dd/mm/yyyy" class="px-5 bg-[#f5f5f5] h-[50px] w-[500px] my-3 outline-none">
            <input type="email" name="" id="" placeholder="Email" class="px-5 bg-[#f5f5f5] h-[50px] w-[500px] my-3 outline-none">
            <input type="password" name="" id="" placeholder="Password" class="px-5 bg-[#f5f5f5] h-[50px] w-[500px] my-3 outline-none">
            <div class="text-left my-5"><button class="px-5 bg-black text-white py-2 button_slide slide_right outline-none">Đăng kí</button></div>
        </form>
        <div>

            <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=trangchu" class="flex">
                <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                </svg></div>
                <p>Quay lại trang chủ</p>
            </a>

        </div>
    </div>
    <style>
        .button_slide {
            color: #FFF;
            border: 2px solid;
            border-radius: 0px;
            padding: 18px 36px;
            display: inline-block;
            font-size: 14px;
            letter-spacing: 1px;
            cursor: pointer;
            box-shadow: inset 0 0 0 0 #faf5f8;
            -webkit-transition: ease-out 0.4s;
            -moz-transition: ease-out 0.4s;
            transition: ease-out 0.4s;
        }

        .slide_right:hover {
            box-shadow: inset 400px 0 0 0 #faf5f8;
            color: black;
        }
    </style>