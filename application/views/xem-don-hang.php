
	<?php
		include_once "header.php";		
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
                                    <th scope="col">Mã đơn hàng</th>
                                    <th scope="col">Ngày đặt</th>
                                    <th scope="col">Địa chỉ</th>  
                                    <th scope="col">Email</th>
                                    <th scope="col">Điện thoại</th>
                                    <th scope="col">Thông tin đơn hàng</th> 
                                    <th scope="col">Tình trạng đơn hàng</th>
                                    <th></th>                                
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $ChuoiHTML_DonHang = "";
                                        $stt = 1;
                                        $tongTien = 0;
                                        
                                        foreach($donHang as $row){
                                            
                                            $Chuoi_GioHang = "";
                                            $ttdh ="";
                                            if($row->trang_thai == false){
                                                $ttdh = "Chưa giao";
                                            }else{
                                                $ttdh = "Đã giao";
                                            }
                                           $gh = json_decode($row->gio_hang);
                                           #var_dump($gh);
                                           $tt= 1;
                                           $soTien = 0;                                           
                                           foreach($gh as $h){
                                               $soTien += $h-> giathue;
                                               $Chuoi_GioHang .= "
                                               <p>$tt. {$h->Tuasach}</p>
                                               ";
                                            $tt++;
                                           }
                                           $Chuoi_GioHang .= "<p><span class = 'badge bg-warning'>Tổng tiền</span>: $soTien vnd</p>"; 
                                           $GiaoHang = "";
                                           if($row -> trang_thai == false){
                                            $GiaoHang .= " <a href='http://php-quoc.epizy.com/Crud/update_don_hang?mdh={$row->id}' class='btn btn-warning btn-sm'>Giao Hàng</a>";
                                           }
                                            $ChuoiHTML_DonHang .= "
                                            <tr>
                                                <th scope='row'>$stt</th>
                                                <td>{$row ->id}</td>
                                                <td>{$row ->ngay}</td>
                                                <td>{$row -> dia_chi}</td>
                                                <td>{$row -> email}</td>
                                                <td>{$row -> dien_thoai}</td>
                                                <td>
                                                    $Chuoi_GioHang
                                                </td>
                                                <td>$ttdh</td> 
                                                <td>
                                                   $GiaoHang
                                                </td>                                               
                                            </tr>         
                                            ";
                                            $stt++;
                                        }
                                                                                
                                        echo $ChuoiHTML_DonHang;  

                                    ?>                                 
                                                                
                                </tbody>
                                </table>
                            </div>
                           
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