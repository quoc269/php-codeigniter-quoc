
	<?php
		include_once "header.php";
		include_once "caroseul_bar.php";
	?>
	<!-- End slides -->	
	
	<div class="menu-box py-5">
		<div class="container">			
			<div class="row inner-menu-box">
				<div class="col-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" href="http://php-quoc.epizy.com/Crud/index" >All</a>						
                        <?php
                            $Chuoi_HTML_Menu = "";
                             foreach($data as $row){
                                 $Chuoi_HTML_Menu.= "<a class='nav-link'  href='http://php-quoc.epizy.com/Crud/index?mtl={$row->Id}'>{$row -> TenTheloaiSach}</a>";
                             }
                             echo $Chuoi_HTML_Menu;
                        ?>
						
					</div>
				</div>
				
				<div class="col-9">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="container">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tựa sách</th>
                                    <th scope="col">Giá thuê</th>   
                                    <th></th>                                
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $ChuoiHTML_GioHang = "";
                                        $stt = 1;
                                        $tongTien = 0;
                                        foreach($gioHang as $k=>$v){
                                            $tongTien += $gioHang[$k]['giathue'];											
                                            $ChuoiHTML_GioHang .= "											
                                            <tr>
                                                <th scope='row'>$stt</th>
                                                <td>{$gioHang[$k]['Tuasach']}</td>
                                                <td>{$gioHang[$k]['giathue']} VND</td> 
                                                <td>
                                                    <a href='http://php-quoc.epizy.com/Crud/huy_sach_thanh_toan?ms={$gioHang[$k]['id']}' class='btn-warning btn-sm'>HỦY</a>
                                                </td>                                               
                                            </tr>         
                                            ";
                                            $stt++;
                                        }
                                        $ChuoiHTML_GioHang .= "
                                         <tr>
                                            <th scope='row'></th>
                                            <th>Tổng tiền</th>
                                            <th>$tongTien VND</th>                                                
                                         </tr> ";
                                        
                                        echo $ChuoiHTML_GioHang;    
                                        
                                        
                                        
                                    ?>                                 
                                                                
                                </tbody>
                                </table>
                            </div>
                            <div>
                            </div>
                            <div>  
                            <form action="http://php-quoc.epizy.com/Crud/ket_thuc_thanh_toan" method="post"> 
								
								<input type="hidden" value='<?php echo json_encode($gioHang) ?>'  name="txtGioHang"/>								
                                <div class="container bg-warning py-2">
                                    <span class='badge bg-danger' >Địa chỉ: </span>
                                    <textarea name='txtDiaChi' cols='60' rows='2' class='form-control' required></textarea> 
                                    <span class='badge bg-danger' >Địa chỉ email: </span><input type='text' class='form-control' value='' name='txtEmail' required>
                                    <span class='badge bg-danger' >Điện thoại: </span>
                                    <input type='number' class='form-control' value='' name='txtDienThoai' required>                            
                                </div>
                                <div class="container py-2">                                          
                                    <div class="text-right">
                                        <input type="submit" name="btnThanhToan" value="THANH TOÁN" class="btn btn-primary" >
                                    </div>                                          
                                </div>
                            </div>
                            </form>
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