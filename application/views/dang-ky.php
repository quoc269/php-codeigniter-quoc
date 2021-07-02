<!doctype html>
<html lang="en">
  <head>
    <title>Admin login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Web2-02 - Đồ án Môn Lập trình web2</title>  
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
    <style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
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
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
 

<form action="http://php-quoc.epizy.com/Crud/xl_dang_ky" method="post">
  <div class="imgcontainer">
  <div class="py-5">
      <h2 class="text-danger">Quý khách vui lòng đăng ký thành viên để thuê sách</h2>
  </div>
    <img src="../../images/khach_hang_avatar.png" style="width:200px; height:200px;" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required> <br>
        
    <input type="submit" name="btnDangKy"  value="ĐĂNG KÝ" class="btn btn-primary mx-auto"> <br>
    
  </div>
 
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>