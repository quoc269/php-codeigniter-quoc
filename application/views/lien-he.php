
	<?php
		include_once "header.php";
		include_once "caroseul_bar.php";
	?>
	<!-- End slides -->	
	
	<!-- /Menu -->
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
							<!-- lien he-->
                             <div class="container bg-secondary py-5 ">
                                <h1>LIÊN HỆ</h1>
                                <h3>Địa chỉ: 227 Nguyễn Văn Cừ, Quận 5, TP Hồ Chí Minh</h3>
                               <div class="text-center">
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6356462377134!2d106.679370713951!3d10.76253826239489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1bfc262bf1%3A0x4e843897f2900135!2zMjI3IMSQLiBOZ3V54buFbiBWxINuIEPhu6ssIFBoxrDhu51uZyA0LCBRdeG6rW4gNSwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1619828563681!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                               </div>
                                <h3>Thông tin:</h3>
                                <h3> Ths. Nguyễn Việt Quốc </h3>
                                <h3> Email: quoc269@gmail.com</h3>
                                <h3> Điện thoại: 0908281090</h3>
                             </div>
                            <!-- /lien he -->							
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