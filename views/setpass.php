
    <div class="w-[500px] mx-auto container text-center">
        <h3 class="text-4xl font-bold my-5">Đặt lại Mật khẩu</h3>
        <form action="../customer/doimk_moi.php" method="POST" onsubmit="return validate_setpass()">
            <h4 class="text-xl text-left py-3">Phục hồi mật khẩu</h4>
            <input type="text" name="email" value="<?php echo $email?>" hidden>
            <input type="password" name="" id="pass" placeholder="Nhập mật khẩu mới" class="px-5 bg-[#f5f5f5] h-[50px] w-[500px] my-3 outline-none">
            <input type="password" name="pass" id="repass" placeholder="Nhập lại mật khẩu" class="px-5 bg-[#f5f5f5] h-[50px] w-[500px] my-3 outline-none">
            <div class="text-left my-5">
                <button class="px-5 border h-[60px] button_slide slide_right bg-black text-white mr-3" type="submit">Gửi</button>
                <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=trangchu">Hủy</a>
            </div>
        </form>

    </div>


<script>
 function validate_setpass(){
var pass = document.getElementById("pass");
if(pass.value==""){
    alert("Bạn chưa nhập mật khẩu mới!");
    pass.style.backgroundColor="red";
    return false;
}
var repass = document.getElementById("repass");
if(repass.value==""){
    alert("Nhập lại mật khẩu mới!");
    repass.style.backgroundColor="red";
    return false;
}
else if(repass.value!=pass.value){
    alert("Sai mật khẩu!");
    return false;
}

}
</script>

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