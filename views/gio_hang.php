<?php
if (empty($_SESSION['gio_hang'])) {
    $result = [];
} else {
    $result = $_SESSION['gio_hang'];
}
?>

<div class="container mx-auto text-center">
    <h1 class="text-3xl">Giỏ hàng của bạn</h1>
    <p class="">Có <?php echo count($result); ?> sản phẩm trong giỏ hàng</p>
    <div class="lop"></div>
    <table>
        <thead>
            <th></th>
            <th></th>
            <th></th>
        </thead>
        <tbody class="">

            <tr class="">
                <?php
                $tongtien = 0;
                $so_luong = 0;
                foreach ($result as $row) {
                    $thanh_tien = $row['productPrice'] * $row['so_luong'];
                    $tongtien += $thanh_tien;
                    $so_luong += $row['so_luong'];
                ?>
                    <td class="py-5">
                        <img class="w-[100px] h-[100px]" src="../img/<?php echo $row['productImage'] ?>" alt="">
                    </td>
                    <td class="text-left py-5 pl-3.5 w-[930px] container">
                        <div class="flex justify-between">
                            <strong><?php echo $row['productName'] ?></strong>
                            <a href="../customer/delete_gio_hang.php?id=<?php echo $row['productId'] ?>">
                                <button> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg></button>
                            </a>
                        </div>
                        <div><span><?php echo $row['productPrice'] ?></span></div>
                        <div><span><?php echo $row['productColor'] ?></span></div>
                        <div class="flex justify-between">
                            <div class="my-3 flex">
                                <button type="button" class="h-8 w-8 bg-slate-200 font-bold" onclick="tru();">-</button>
                                <span id="counting" class="border text-center w-[70px] font-bold flex justify-center items-center">
                                    <input type="text" name="productSl" class="w-1/3 h-full " value="<?php echo $row['so_luong']?>" id="count">
                                </span>
                                <button type="button" class="h-8 w-8 bg-slate-200 font-bold" onclick="cong()">+</button>
                            </div>
                            <div>
                                <strong><?php echo number_format($thanh_tien) ?></strong>
                            </div>
                        </div>
                    </td>
            </tr>
        <?php
                }
        ?>
        </tbody>
    </table>
    <div class="flex justify-between my-5">
        <form action="">
            <textarea class="w-[500px] bg-[#ededed] h-[130px] p-2 outline-none" name="" id="" cols="30" rows="10" placeholder="Ghi Chú"></textarea>
        </form>
        <div>
            <p>Tổng tiền:<strong class="text-3xl"><?php echo number_format($tongtien) ?>₫</strong></p>
            <div class="my-4">
                <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=sanpham">
                    <button class="border p-5 button_slide slide_right outline-none bg-black text-white">Tiếp tục mua hàng</button>
                </a>
                <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=giohang">
                    <button class="border p-5 button_slide slide_right outline-none bg-black text-white">Cập nhật</button>
                </a>
                <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=thanhtoan">
                    <button class="border p-5 bg-red-500 text-white button_slide slide_right1">Thanh toán</button>
                </a>
            </div>
        </div>
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

    .slide_right1:hover {
        box-shadow: inset 400px 0 0 0 #faf5f8;
        color: red;
    }
</style>
<script>
    // var i=document.querySelector('#count').value;
// function cong(){
//    i++;
//    if(i>10){
//     i=10;
//    };
//    document.querySelector('#count').value = i;
// }
// function tru(){
//    i--;
//    if(i<1) {
//     i=1;
//    };
//    document.querySelector('#count').value = i;
// }
</script>