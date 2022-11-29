<?php
    //dem so don hang
    $sql = "select count(orderId) from orders ";//where Month(orderDate)=Month(getDate());?
    $qty = getOne($sql);
    $sql1 = "select sum(totalMoney) from orders";
    $total = getOne($sql1);
    $sql2 = "select sum(profit) from orders";
    $profit = getOne($sql2);
    // var_dump( $qty, $total,$profit);
    //đếm số tk
    $sql3 = "select count(userId) from user";
    $userQty = getOne($sql3);
    $sql4 = "select count(userId) from user where roleId = 4";
    $adminQty = getOne($sql4);
    //  var_dump($userQty,$adminQty);die;
    $sql5 = "select count(productId) from product";
    $productQty = getOne($sql5);
    $undefineQty = getOne("select count(productId) from product where brandId = 0");
    $result =top10();
    $result1 = getCategory();
    $dataPoints = [];
    $dataPoints1 = [];
    function countProInBrand($id){
        $sql = "select count(productId) from product where brandId = $id ";
        $result2 = connect($sql);
        return $result2;
    }

   foreach($result as $row){
       array_push($dataPoints,array(
           "label"=>$row['productName'],
           "y"=>$row['productPrice']
        ));
    }
    foreach($result1 as $row){
        array_push($dataPoints1,array(
            "label" => $row['brandName'],
            "y" => 25
         ));
     }



?>
<div class="page-wrapper">
    <div class="page-breadcrumb bg-white d-flex justify-content-between align-items-center">
        <p class="fs-6 fw-bold">Trang Chủ</p>
        
        <!-- /.col-lg-12 -->
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="white-box row">
                    <div class="col card border" style="padding:1rem 0.5rem; border-radius: 0.5rem; margin: 0 0.5rem;">
                        <h3 class="box-title card-title alert alert-success">Thống kê doanh thu </h3>
                        <p class="card-body">
                            Tổng <b><?php echo $qty[0]; ?></b> đơn hàng <br>
                            - Tổng doanh thu đạt <b><?php echo number_format($total[0]);?>đ</b>   <br>
                            - Lợi nhuận đạt <b><?php echo number_format($profit[0]); ?>đ</b> <br>
                        </p>
                        <a href="http://localhost/WEB17301/du_an_1/admin/index.php?act=donhang" class="btn btn-primary">Quản lí đơn hàng</a>      
                    </div>
                    <div class="col card border" style="padding:1rem 0.5rem; border-radius: 0.5rem; margin: 0 0.5rem;">
                        <h3 class="box-title card-title alert alert-success">Thống kê tài khoản </h3>
                        <p class="card-body">
                            Tổng <b><?php echo $userQty[0]; ?></b> tài khoản <br>
                            - <b><?php echo $adminQty[0];?></b> tài khoản quản trị   <br>
                            - <b><?php echo $userQty[0] - $adminQty[0]; ?></b> tài khoản khách hàng <br>
                        </p>
                        <a href="http://localhost/WEB17301/du_an_1/admin/index.php?act=khachhang" class="btn btn-primary">Quản lí tài khoản</a>       
                    </div>
                    <div class="col card border" style="padding:1rem 0.5rem; border-radius: 0.5rem; margin: 0 0.5rem;">
                        <h3 class="box-title card-title alert alert-success">Thống kê sản phẩm </h3>
                        <p class="card-body">
                            Tổng <b><?php echo $productQty[0]; ?></b> mặt hàng <br>
                            - Có <b><?php echo $undefineQty[0];?></b> mặt hàng cần phân loại  <br>
                            
                        </p>
                        <a href="http://localhost/WEB17301/du_an_1/admin/index.php?act=sanpham" class="btn btn-primary">Quản lí sản phẩm</a>       
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="white-box ">
                    <h3 class="box-title">Thống kê danh mục</h3>
                    <div class="d-flex">
                        <div id="chartContainer1" style="height:450px; width: 100%;"></div>
                        <div id="chartContainer" style="height:450px; width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <div class="d-md-flex mb-3">
                        <h3 class="box-title mb-0">Top 10 sản phẩm</h3>
                        <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                            <select class="form-select shadow-none row border-top">
                                <option>March 2021</option>
                                <option>April 2021</option>
                                <option>May 2021</option>
                                <option>June 2021</option>
                                <option>July 2021</option>
                            </select>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Tên sản phẩm</th>
                                    <th class="border-top-0">Đơn giá</th>
                                    <th class="border-top-0">Màu Sắc</th>
                                    <th class="border-top-0">Tình trạng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($topTenProducts as $product):?>
                                <tr>
                                    <td><?php echo $product['productId']?></td>
                                    <td class="txt-oflo"><?php echo $product['productName']?></td>
                                    <td><?php echo $product['productPrice']?></td>
                                    <td class="txt-oflo"><?php echo $product['productColor']?></td>
                                    <td><span class="text-success"><?php echo $product['productStatus']==1?"Còn Hàng":"Hết Hàng"?></span></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script>

window.onload = function () {
 var chart = new CanvasJS.Chart("chartContainer", {
     animationEnabled: true,
     theme: "light2", // "light1", "light2", "dark1", "dark2"
     title: {
         text: "Giá Bán Sản Phẩm"
     },
     
     data: [{
         type: "column",
         dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
     }]
 });
 chart.render();
 var chart1 = new CanvasJS.Chart("chartContainer1", {
	theme: "light2",
	animationEnabled: true,
	title: {
		text: "Danh mục sản phẩm",
	},
	data: [{
		type: "pie",
		indexLabel: "{y}",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabelPlacement: "inside",
		indexLabelFontColor: "#36454F",
		indexLabelFontSize: 18,
		indexLabelFontWeight: "bolder",
		showInLegend: true,
		legendText: "{label}",
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	}]
});
chart1.render();
}
</script>