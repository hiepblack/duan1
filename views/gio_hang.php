<div class="container mx-auto text-center">
        <h1 class="text-3xl">Giỏ hàng của bạn</h1>
        <p class="">Có 0 sản phẩm trong giỏ hàng</p>
                <div class="lop"></div>
        <table>
            <thead>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody class="">
                <tr class="">
                    <td class="py-5"><img class="w-[100px] h-[100px]" src="https://product.hstatic.net/1000406173/product/product-30_2cf560d0906c479e888ca6d6930c3554_master.jpg" alt=""></td>
                    <td class="text-left py-5 pl-3.5 w-[930px] container">
                        <div class="flex justify-between">
                            <strong>Xe Đạp Sportslink Fixed Gear Single Aventon</strong>
                            <button> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg></button>

                        </div>
                        <div><span>1,750,000₫</span> <s> (1,950,000₫)</s></div>
                        <div><span>Đen</span></div>
                        <div class="flex justify-between">
                            <div class="flex">
                                <button onclick="cong()" class="w-[25px] h-[25px] border"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>
                                </button>
                                <input type="number" value="1" class="border w-[35px] h-[25px]" id="number">
                                <button onclick="tru()" class="w-[25px] h-[25px] border"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                                    </svg>
                                </button>
                            </div>
                            <div>
                                <strong>1,750,000₫</strong>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="flex justify-between my-5">
            <form action="">
                <textarea class="w-[500px] bg-[#ededed] h-[130px] p-2 outline-none" name="" id="" cols="30" rows="10" placeholder="Ghi Chú"></textarea>
            </form>
            <div>
                <p>Tổng tiền:<strong class="text-3xl">1,890,000₫</strong></p>
                <div class="my-4">
                    <button class="border p-5 button_slide slide_right outline-none bg-black text-white">Tiếp tục mua hàng</button>
                    <button class="border p-5 button_slide slide_right outline-none bg-black text-white">Cập nhật</button>
                    <button class="border p-5 bg-red-500 text-white button_slide slide_right1">Thanh toán</button>
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