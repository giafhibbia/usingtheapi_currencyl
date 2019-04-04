<!DOCTYPE html>
<html>
<head>
	<title>currency exchange from SGD to IDR, MYR to IDR, USD to IDR, IDR to SGD, IDR to MYR, IDR to USD</title>
	<meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, width=device-width, height=device-height">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<META name="Author" content="Zaenal Muttaqien">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" >
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
	<style type="text/css">
		.qq_box .navbar-brand span{
			color: rgba(150, 150, 150, 0.9) !important;
			font-family: 'Dancing Script', cursive;
			font-size: 30px;
		} 
		.qq_main_box{
			border: 1px solid #f3f3f3;
			margin-top: 40px;
			padding: 40px;
		}
		.qq_color_content{
			color: #a2a2a2;
		}
		.qq_color_title{
			color: #6d6d6d !important;
		}
		.qq_box{
			box-shadow: 1px 1px 5px 1px #f3f3f3;
		}
		.qq_margin_20all{
			margin-top: 20px !important;
		}
		.qq_margin_20all .col-md-6{
			margin-bottom: 20px !important;
		}
	</style>
</head>
<body>
	<section class="container-fluid qq_box">
		<nav class="container navbar navbar-light">
			<a class="navbar-brand" href="#">
				<img src="<?php echo base_url(); ?>assets/image/qq.png" width="40" height="40" class="d-inline-block align-top" alt="">
				<span>Media Tech</span>
			</a>
		</nav>
	</section>
		
	<section class="container">
		<div class="row qq_main_box">
			<div class="col-md-6">
				<span class="qq_color_title">1 Singapore Dollar Equals</span>
				<h3>14,192.65</h3>
				<h3>Indonesian Rupiah</h3>
				<span class="qq_color_content">Apr 4, 4:49 AM UTC · Disclaimer</span>
				<div class="row qq_margin_20all">
					<div class="col-md-6">
						<input type="text" class="form-control" name="price" value="1">
					</div>
					<div class="col-md-6">
						<select class="form-control">
							<option value="USD">Dollar Amerika</option>
							<option value="SGD">Dollar Singapore</option>
						</select>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<canvas id="myChart" width="400" height="400"></canvas>
			</div>
		</div>
	</section>
</body>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<script>
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['2014', '2016', '2017', '2018', '2019', '2020'],
        datasets: [{
            label: '# Grafik line currency',
            data: [10000, 12000, 13000, 14000, 15000, 14500],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

</html>