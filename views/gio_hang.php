<div class="container mx-auto text-center">
    <h1 class="text-3xl">Giỏ hàng của bạn</h1>
    <p class="">Có <?php echo count($result); ?> sản phẩm trong giỏ hàng</p>
    <div class="">
        <form action="../customer/add_cart.php?update" class="flex justify-between items-center p-2" method="post">
            <table>
                <tbody>
                    <tr class="border">
                        <?php
                        $tongtien = 0;
                        $so_luong = 0;
                        foreach ($result as $row) {
                            $thanh_tien = $row['productPrice'] * $row['so_luong'];
                            $tongtien += $thanh_tien;
                            $so_luong += $row['so_luong'];
                        ?>
                            <input type="hidden" name="productId" value="<?php echo $row['productId'] ?>">
                            <td class="py-5">
                                <img class="w-[100px] h-[100px]" src="../img/<?php echo $row['productImage'] ?>" alt="">
                            </td>
                            <td class="text-left py-5 pl-3.5 w-[930px] container border-b-2">
                                <div class="flex justify-between">
                                    <strong><?php echo $row['productName'] ?></strong>
                                    <a href="../customer/delete_gio_hang.php?id=<?php echo $row['productId'] ?>">
                                        <span> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                                <div><span><?php echo number_format($row['productPrice']) ?>đ</span></div>
                                <div><span><?php echo $row['productColor'] ?></span></div>
                                <div class="flex justify-between">
                                    <div class="my-3 flex">
                                        <span id="counting" class="border text-center w-[70px] font-bold flex justify-center items-center">
                                            <input type="number" name="productSlUpdate" class="w-full h-full text-center py-2 outline-none" value="<?php echo $row['so_luong'] ?>" min="1">
                                        </span>
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
            <div class="flex flex-col">
                <p>Tổng tiền:<strong class="text-3xl"><?php echo number_format($tongtien) ?>₫</strong></p>
                <div class="my-4">
                    <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=sanpham">
                        <p class="border p-5 button_slide slide_right outline-none bg-black text-white">Tiếp tục mua hàng</p>
                    </a>
                    <button class="border p-5 button_slide slide_right outline-none bg-black text-white" type="submit" name="update">Cập nhật</button>
                </div>
                <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=thanhtoan" class="w-full">
                    <p class="border p-5 bg-red-500 text-white button_slide slide_right1 w-full">Thanh toán</p>
                </a>
            </div>
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

    .slide_right1:hover {
        box-shadow: inset 400px 0 0 0 #faf5f8;
        color: red;
    }
</style>