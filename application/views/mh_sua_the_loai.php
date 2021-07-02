
	<!-- Start slides -->
	<?php
		include_once "header.php";		
	?>
	<!-- End slides -->	
	<div class="menu-box py-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center bg-success py-3">
						<h1 class="text-danger">TRANG QUẢN LÝ THỂ LOẠI SÁCH CỦA ADMIN</h1>					
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
                                 foreach($TheLoaiSua as $row){
                                    
                                    $Chuoi_HTML_Sach .= "<div class='container special-grid drinks'>
                                    <div class='gallery-single fix'>
                                        <img src='{$row->url_the_loai}'  style='width: 800px; height:800px;' class='img-fluid' alt='{$row->url_the_loai}'>
                                        <div class='why-text'>
                                            <form action='http://php-quoc.epizy.com/Crud/update_The_loai' method='post'>   
                                            <h1 class='text-danger'>SỬA THỂ LOẠI SÁCH CỦA ADMIN </h1>   
                                            <input type='hidden' class='form-control' name='txtID' value='{$row->Id}'>                                 
                                            <span class='badge bg-warning' >Tên Thể loại: </span>
                                            <textarea name='txtTenTheLoai' cols='60' rows='3' class='form-control'>{$row-> TenTheloaiSach}</textarea>                                             
                                            <span class='badge bg-warning' >ULR Hình: </span>
                                            <textarea name='txtURL' cols='60' rows='3' class='form-control'>{$row->url_the_loai}</textarea> 
                                            <input type='submit' name='btnSua' value='SỬA' class='btn btn-primary form-control'>

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
	
	
	
	
	<!-- End Contact info -->
	<?php
		include_once "footer.php";
	?>