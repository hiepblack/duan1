<?php
    $result =top10();
    $result1 = getCategory();
    $dataPoints = [];
    $dataPoints1 = [];
   foreach($result as $row){
       array_push($dataPoints,array(
           "label"=>$row['productName'],
           "y"=>$row['productPrice']
        ));
    }
    foreach($result1 as $row){
        array_push($dataPoints1,array(
            "label"=>$row['brandName'],
            "y"=>33
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