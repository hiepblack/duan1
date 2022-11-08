<div class=" mx-auto text-center w-[500px] my-4">
    <h3 class="text-4xl font-bold my-5">Đăng nhập</h3>
    <form action="../customer/login_user.php" method="post">
        <div><input type="email" name="email" placeholder="Email" class="px-5 bg-[#f5f5f5] h-[50px] w-[500px] my-3 outline-none"></div>
        <div><input type="password" name = "password" placeholder="Mật khẩu" class="px-5  bg-[#f5f5f5] h-[50px] w-[500px] my-3 outline-none"></div>
        <div class="flex items-center justify-between">
            <div class="text-left">
                <button class="px-5 bg-black text-white py-2 button_slide slide_right outline-none" type="submit">Đăng nhập</button>
            </div>
            <div>
                <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=quenmk" class="mr-2">Quên mật khẩu?</a>hoặc <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=dangki">Đăng kí</a>
            </div>
        </div>
    </form>
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