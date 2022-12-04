<?php
if (isset($_GET['delete'])) {
    echo '<div  class="toast flex items-center p-4 mb-4 w-full max-w-xs text-gray-500 bg-white rounded-lg shadow absolute top-5 right-5 transition-transform" role="alert">
    <div class="inline-flex flex-shrink-0 justify-center items-center w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Error icon</span>
    </div>
    <div class="ml-3 text-sm font-normal">Đã xoá một sản phẩm</div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-danger" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
</div>';
}
if(isset($_GET['update'])){
    echo '<div  class="toast flex items-center p-4 mb-4 w-full max-w-xs text-gray-500 bg-white rounded-lg shadow absolute top-5 right-5 transition-transform" role="alert">
        <div class="inline-flex flex-shrink-0 justify-center items-center w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Check icon</span>
        </div>
        <div class="ml-3 text-sm font-normal">Cập nhật sản phẩm thành công</div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
    </div>';
}
?>
<div class="container mx-auto text-center">
    <h1 class="text-3xl">Giỏ hàng của bạn</h1>
    <p class="">
        <?php
        if ($success) {
            echo $success;
        } else {
            echo "Có " . count($result) . " sản phẩm trong giỏ hàng";
        }
        ?>
    </p>
    <?php //var_dump($_SESSION["gio_hang"]); die; 
    ?>
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
                            <input type="hidden" name="productId[]" value="<?php echo $row['productId']; ?>">
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
                                            <input type="number" name="productSlUpdate[]" class="w-full h-full text-center py-2 outline-none" value="<?php echo $row['so_luong'] ?>" min="1">
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
                <a href="http://localhost/WEB17301/Du_an_1/views/index.php?act=thanhtoan" class="w-full" <?php echo count($result) == 0 ? "hidden" : "" ?>>
                    <p class="border p-5 bg-red-500 text-white button_slide slide_right1 w-full">Thanh toán</p>
                </a>
            </div>
        </form>
    </div>

</div>
<script>
    
    const myTimeout = setTimeout(function() {
        var thongbao = document.querySelectorAll('.toast');
        thongbao.forEach(function(item){
            item.classList.add('hidden');
        })
    }, 2000)
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

    .slide_right1:hover {
        box-shadow: inset 400px 0 0 0 #faf5f8;
        color: red;
    }
</style>