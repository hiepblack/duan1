


    <div class="w-[500px] mx-auto container text-center">
        <h3 class="text-4xl font-bold my-5">Đăng nhập</h3>
        <form action="../customer/set_pass.php" method="POST">
            <h4 class="text-xl text-left py-3">Phục hồi mật khẩu</h4>
            <input type="email" name="email" id="" placeholder="Email" class="px-5 bg-[#f5f5f5] h-[50px] w-[500px] my-3 outline-none">
            <div class="text-left my-5">
                <button class="px-5 border h-[60px] button_slide slide_right bg-black text-white mr-3">Gửi</button>
                <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=trangchu">Hủy</a>
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