<?php 
if(isset($_GET['success'])){
    echo "<script>alert('Cảm ơn bạn đã góp ý')</script>";
}
?>
<div class="md:grid block grid-cols-2 my-4">
    <div class="w-full h-full border">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8639810443356!2d105.74459841485445!3d21.038127785993236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf6f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1667367660981!5m2!1svi!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="p-8">
        <h3 class="text-4xl font-bold">Liên hệ</h3>
        <p class="w-20 h-1 bg-black my-4"></p>
        <div class="pt-3">
            <p>Địa chỉ chúng tôi</p>
            <strong>Tòa nhà FPT Polytechnic, P. Trịnh Văn Bô, Xuân Phương, Nam Từ Liêm, Hà Nội</strong>
        </div>
        <div class="pt-3">
            <p>Email chúng tôi</p>
            <strong>nhom8duan1@gmail.com</strong>
        </div>
        <div class="pt-3">
            <p>Điện thoại</p>
            <strong>113</strong>
        </div>

            <h3 class="text-4xl font-bold mt-9 mb-9">Gửi thắc mắc cho chúng tôi</h3>
            <p class="w-20 h-1 bg-black my-4"></p>
            <input type="text" placeholder="Nhập tên của bạn" id="name" name="name" class="border w-full pl-2 pt-2 pb-2 mb-4 bg-[#F5F5F5]" require>
            <div class="mb-4 mt-4">
                <input type="email" name="email" id="email" placeholder="Email của bạn" class="border pl-2 pt-2 pb-2 mr-2 bg-[#F5F5F5]" require>
                <input type="text" name="phone" id="phone" placeholder="Số điện thoại của bạn" class="border pl-2 pt-2 pb-2 ml-2 bg-[#F5F5F5]" require>
            </div>
            <textarea name="content" id="content" cols="30" rows="10" placeholder="Nội dung" class="border w-full mt-4 pl-2 bg-[#F5F5F5]" require></textarea>
            <button class="border pr-7 pl-7 pt-4 pb-4 bg-black text-white hover:bg-white hover:text-black mt-10 mb-10 button_slide slide_right" type="submit" >GỬI CHO CHÚNG TÔI</button>
        </form>
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