<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-['Quicksand']">
    <div class="md:flex md:flex-row flex-col-reverse mx-auto container">
        <div class="md:text-left text-center box_1">
            <h1 class="text-3xl mt-5">Sport Bicycle</h1>
            <p class="text-xl py-5">Thông tin giao hàng</p>
            <form action="">
                <div>
                    <input type="text" placeholder="Họ và tên" class="py-3 border md:w-[500px] w-full my-5 pl-1 rounded outline-none shadow-sm">
                </div>
                <div>
                    <input type="email" placeholder="Email" class="py-3 border md:w-[300px] w-full my-5 pl-1 rounded outline-none shadow-sm">
                    <input type="text" placeholder="SDT" class="py-3 border md:w-[196px] w-full my-5 pl-1 rounded outline-none shadow-sm">
                </div>
                <div>
                    <input type="text" placeholder="Địa Chỉ" class="py-3 border md:w-[500px] w-full my-5 pl-1 rounded outline-none shadow-sm">
                </div>
                <button class="bg-blue-500 text-white hover:bg-blue-300 py-5 px-3 rounded">Tiếp Tục Thanh Toán</button>
            </form>
            <div class="text-center mt-[250px]">
                <hr>
                <span class="pt-5">Code by nhóm 8</span>

            </div>

        </div>
        <div class="box_2">
            <div class="flex mt-7">
               <img class="w-[100px] h-[100px] border rounded" src="https://product.hstatic.net/1000406173/product/product-33_311770c8d7b5434da330df1cba6e6895_master.jpg" alt="">
                <div class="pl-5 py-5">
                    <strong>Xe Đạp Fixed Gear Single</strong>
                    <span class="block">Cam</span>  
                </div>
                <p class="py-5 pl-[100px]">1,890,000₫</p>
            </div>
            <div class="pt-5 flex">
                <hr>
                <h3 class="text-lg">Tạm phí</h3>
                <p class=" pl-[100px]">1,890,000₫</p>
            </div>
            
        </div>

    </div>

</body>
<style>
    .box_1{
        border: 1px solid;
        border-bottom:transparent ;
        border-top: transparent;
        border-left: transparent;
        padding-right:150px ;
    }
    .box_2{
        padding-left: 100px;
        
    }
</style>
</html>