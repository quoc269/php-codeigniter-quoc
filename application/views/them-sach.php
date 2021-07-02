
	<?php
		include_once "header.php";
		include_once "caroseul_bar.php"
	?>
	<!-- End slides -->	
	
	<div class="menu-box py-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center bg-success py-3">
						<h1 class="text-danger">TRANG QUẢN LÝ SÁCH CỦA ADMIN</h1>					
					</div>
				</div>
			</div>
            <div class="container bg-warning text-right py-3">
                <a href="#" class="btn btn-danger"> THÊM SÁCH</a>
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
							<div class="row">
                             <?php 
                                $id = count($dsSach);
                                $id = $id+1;
                             ?>
													
								<div class='container special-grid drinks'>
                                    <div class='gallery-single fix'>
                                        <img src='../../images/quoc-avatar.jpg'  style='width: 800px; height:800px;' class='img-fluid' alt='{$row->URLHinh}'>
                                        <div class='why-text'>
                                            <form action='http://php-quoc.epizy.com/Crud/them_sach' method='post'>   
                                            <h1 class='text-danger'> THÊM SÁCH CỦA ADMIN </h1>  
											<span class='badge bg-warning' >Mã sách: </span> 
											<label for=""><?php echo $id ;?></label> <br>
                                            <input type='hidden' class='form-control' name='txtID' value='<?php echo $id ;?>'>                                 
                                            <span class='badge bg-warning' >Tựa sách: </span>
                                            <textarea name='txtTuaSach' cols='60' rows='3' class='form-control'></textarea> 
                                            <span class='badge bg-warning' >Tình trạng sách: </span>
											<select  name='txtTinhTrang' class="form-control" aria-label="Default select example" required>
												<option selected>Chọn tình trạng sách</option>
												<option value="1">Còn hàng</option>
												<option value="0">Hết hàng</option>										
											</select>
                                            <span class='badge bg-warning' >Giá thuê: </span><input type='number' class='form-control' name='txtGiaThue' value=''>  VND
                                            <span class='badge bg-warning' >ULR Hình: </span>
                                            <textarea name='txtURL' cols='60' rows='3' class='form-control'></textarea>                                           
											<span class='badge bg-warning' >Tên Thể Loại: </span>
											<select  name='txtThuocTheLoai' class="form-control" aria-label="Default select example" required>
												<option selected>Chọn Tên thể loại</option>
												<?php 
													foreach($data as $row){
														echo "<option value='{$row->Id}'>{$row->TenTheloaiSach}</option>";
													}
												?>												
											</select>
											
                                            <input type='submit' name='btnThem' value='THÊM' class='btn btn-primary form-control'>

                                            </form>
                                        </div>
                                    </div>
                                </div>	
							</div>
							
						</div>
						
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<!-- End Menu -->
	
	
	
	
	<!-- Start Footer -->
	<?php
		include_once "footer.php";
	?>