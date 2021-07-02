<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>QuocNguyen - PHP Codeigniter</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../../images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="../../css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../css/custom.css">
	  <!-- Bootstrap CSS -->
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<!-- logo- thong tin dang nhap -->
	<div class="container-fluid fixed-top bg-light">
		<div class="row">
			<div class="col-3">
				<a class="navbar-brand" href="/">
					<img src="../../images/logo.jpg" style="width: 400px; height: 50px;" alt="" />
				</a>
			</div>
			<div class="col-9 text-right px-3">
				<div class="row">
				<div class="col">
				<?php 
				if($admin != null){
					 foreach($admin as $row){
					 echo "<span class='badge bg-warning'> Xin chào Admin: {$row-> user} </span>";
					 echo "<a  href='http://php-quoc.epizy.com/Crud/logout_admin'> <img src='http://maps.wbphed.gov.in/pwss_new/admin/images/login-img.jpg' style='width:30px; height:30px;' alt='login image'>
					THOÁT ĐĂNG NHẬP </a>";	
					 }
				}elseif($KH != null){
					foreach($KH as $row)
					{echo "<span class='badge bg-warning'> Xin chào khách hàng: {$row-> user} </span>";
					break;
					}
					echo "<a  href='http://php-quoc.epizy.com/Crud/logout_admin'> <img src='http://maps.wbphed.gov.in/pwss_new/admin/images/login-img.jpg' style='width:30px; height:30px;' alt='login image'>
					THOÁT ĐĂNG NHẬP </a>";	
				}else{
					include_once("button-dang-nhap.php");
				}
				?>
				</div>
				
				</div>
			</div>
		</div>
	</div>
	<!-- logo- thong tin dang nhap -->
	<!-- Start header -->
	<header class="top-navbar py-5">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">		
			<div class="container">				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="/">Home</a></li>					
						<li class="nav-item"><a class="nav-link" href="http://php-quoc.epizy.com/Crud/trang_gioi_thieu">About</a></li>
						<li class="nav-item"><a class="nav-link" href="http://php-quoc.epizy.com/Crud/gio_hang">Giỏ hàng
						 <?php 						 
						 if($gioHang !=null){ 
							$count = count($gioHang);
							echo "<span class='badge bg-warning'>{$count}</span>";
							}
						 else{
							echo "<span class='badge bg-warning'>0</span>";
						}
						 ?>
						</a></li>
						<li class="nav-item"><a class="nav-link" href="http://php-quoc.epizy.com/Crud/thanh_toan">Thanh toán</a></li>
						<li class="nav-item"><a class="nav-link" href="http://php-quoc.epizy.com/Crud/trang_lien_he">Liên hệ</a></li>
						<?php
							if($admin != null){
								echo "<li class='nav-item'><a class='nav-link' href='http://php-quoc.epizy.com/Crud/crud_admin'>Trang Admin</a></li>";
							}
						?>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	<div class="py-5"></div>
	<!-- Start slides -->