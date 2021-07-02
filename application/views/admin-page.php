
	<?php
		include_once "header.php";
		include_once "caroseul_bar.php"
	?>
	<!-- End slides -->	
	
	<!-- Start Menu -->
	<div class="menu-box py-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center bg-success py-3">
						<h1 class="text-danger">TRANG QUẢN LÝ SÁCH CỦA ADMIN</h1>					
					</div>
				</div>
			</div>
			<!-- Tim kiem sach -->
			<div class="container bg-info py-2 text-right">
			<form action="http://php-quoc.epizy.com/Crud/tim_kiem" method="post">
				<input type="text" value="" name="txtTuKhoa" />
				<input type="submit" name="btnTimKiem" value="Tìm kiếm" class="btn btn-success">

			</form>
			
			</div>
			<!-- /Tim kiem sach -->
			<div class="container bg-warning text-right py-3">               
                <div class="row">
                    <div class="col">
                        <a href="http://php-quoc.epizy.com/Crud/admin_the_loai_sach" class="btn btn-danger"> QUẢN LÝ THỂ LOẠI SÁCH</a>
                    </div>
                    <div class="col">
                        <a href="http://php-quoc.epizy.com/Crud/xem_don_hang" class="btn btn-danger"> XEM ĐƠN HÀNG</a>
                    </div>
                    <div class="col">
                        <a href="http://php-quoc.epizy.com/Crud/mh_them_sach" class="btn btn-danger"> THÊM SÁCH</a>
                    </div>                   
                </div>
            </div>			
			<div class="row inner-menu-box">
				<div class="col-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" href="http://web2-02.epizy.com/Crud/crud_admin" >All</a>						
                        <?php
                            $Chuoi_HTML_Menu = "";
                             foreach($data as $row){
                                 $Chuoi_HTML_Menu.= "<a class='nav-link'  href='http://php-quoc.epizy.com/Crud/crud_admin?mtl={$row->Id}'>{$row -> TenTheloaiSach}</a>";
                             }
                             echo $Chuoi_HTML_Menu;
                        ?>
						
					</div>
				</div>
				
				<div class="col-9">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="row">

													
								<?php
                                    $Chuoi_HTML_Sach = "";
                                    if(!isset($_GET["mtl"])){
                                        foreach($dsSach as $row){
                                            $TinhTrangSach = "";
                                            if($row-> TrangThai == 1){
                                                $TinhTrangSach = "Còn hàng";
                                            }else{
                                                $TinhTrangSach = "Hết hàng";
                                            }
                                            $Chuoi_HTML_Sach .= "<div class='col-lg-4 col-md-6 special-grid drinks'>
                                            <div class='gallery-single fix'>
                                                <img src='{$row->URLHinh}'  style='width: 300px; height:350px;' class='img-fluid' alt='{$row->URLHinh}'>
                                                <div class='why-text'>
                                                    <h4>Tựa sách: {$row-> Tuasach}</h4>
                                                    <p>Tình trạng: $TinhTrangSach </p>
                                                    <h5>Giá thuê: {$row-> giathue} VND</h5>
                                                    <div class='row'>
                                                        <div class='col'>
                                                            <a class='btn btn-primary' href='http://php-quoc.epizy.com/Crud/sua_sach?ms={$row->id}'>Sửa</a>                                                            
                                                        </div>
                                                        <div class='col'>
                                                            <a class='btn btn-danger' href='http://php-quoc.epizy.com/Crud/mh_xoa_sach?ms={$row->id}'>Xóa</a>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>		";
                                        }

                                    }else{
                                        foreach($sach as $row){
                                            $TinhTrangSach = "";
                                            if($row-> TrangThai == 1){
                                                $TinhTrangSach = "Còn hàng";
                                            }else{
                                                $TinhTrangSach = "Hết hàng";
                                            }
                                            $Chuoi_HTML_Sach .= "<div class='col-lg-4 col-md-6 special-grid drinks'>
                                            <div class='gallery-single fix'>
                                                <img src='{$row->URLHinh}'  style='width: 300px; height:350px;' class='img-fluid' alt='{$row->URLHinh}'>
                                                <div class='why-text'>
                                                    <h4>Tựa sách: {$row-> Tuasach}</h4>
                                                    <p>Tình trạng: $TinhTrangSach </p>
                                                    <h5>Giá thuê: {$row-> giathue} VND</h5>
                                                    <div class='row'>
                                                        <div class='col'>
                                                            <a class='btn btn-primary' href='#'>Sửa</a>                                                            
                                                        </div>
                                                        <div class='col'>
                                                            <a class='btn btn-danger' href='#'>Xóa</a>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>		";
    
                                        }
                                    }
                                   
                                    echo $Chuoi_HTML_Sach;
                                ?>
							</div>
							
						</div>
						
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<!-- End Menu -->
	
	<?php
		include_once "footer.php"
	?>