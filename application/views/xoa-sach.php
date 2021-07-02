
	<?php
		include_once "header.php";
		include_once "caroseul_bar.php";
	?>
	<!-- End slides -->	
	
	<!-- Start Menu -->
	<div class="menu-box py-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center bg-success py-3">
						<h1 class="text-danger">TRANG SỬA SÁCH CỦA ADMIN</h1>					
					</div>
				</div>
			</div>
			
			<div class="row inner-menu-box">
				<div class="col-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" href="http://php-quoc.epizy.com/Crud/crud_admin" >All</a>						
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
							<?php
                                $Chuoi_HTML_Sach = "";
                                 foreach($SachSua as $row){
                                    $TinhTrangSach = "";
                                    if($row-> TrangThai == 1){
                                        $TinhTrangSach = "Còn hàng";
                                    }else{
                                        $TinhTrangSach = "Hết hàng";
                                    }
                                    $Chuoi_HTML_Sach .= "<div class='container special-grid drinks'>
                                    <div class='gallery-single fix'>
                                        <img src='{$row->URLHinh}'  style='width: 800px; height:800px;' class='img-fluid' alt='{$row->URLHinh}'>
                                        <div class='why-text'>
                                            <form action='http://php-quoc.epizy.com/Crud/xoa_sach' method='post'>   
                                            <h1 class='text-danger'>SỬA SÁCH CỦA ADMIN </h1>   
                                            <input type='hidden' class='form-control' name='txtID' value='{$row->id}'>                                 
                                            <span class='badge bg-warning' >Tựa sách: </span>
                                            <textarea name='txtTuaSach' cols='60' rows='3' class='form-control'>{$row-> Tuasach}</textarea> 
                                            <span class='badge bg-warning' >Tình trạng sách: </span><input type='number' class='form-control' value='{$row-> TrangThai}' name='txtTinhTrang' min='0' max='1'> 
                                            <span class='badge bg-warning' >Giá thuê: </span><input type='number' class='form-control' name='txtGiaThue' value='{$row-> giathue}'> VND
                                            <span class='badge bg-warning' >ULR Hình: </span>
                                            <textarea name='txtURL' cols='60' rows='3' class='form-control'>{$row->URLHinh}</textarea> 
                                            <input type='submit' name='btnXoa' value='XÓA SÁCH' class='btn btn-primary form-control'>

                                            </form>
                                        </div>
                                    </div>
                                </div>		";

                                }
                                echo $Chuoi_HTML_Sach;

                            ?>
							
						</div>
						
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<!-- End Menu -->
	
	
	
	
	<?php
		include_once "footer.php";
	?>