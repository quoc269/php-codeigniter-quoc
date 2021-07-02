
	<?php
		include_once "header.php";
		include_once "caroseul_bar.php";
	?>
	<!-- End slides -->	
	<div class="py-5"></div>
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
							<!-- gioi thieu -->
                             <div class="container bg-warning py-5">
							 <h3>Thông tin:</h3>
                                <h3> Ths. Nguyễn Việt Quốc </h3>
                                <h3> Email: quoc269@gmail.com</h3>
                                <h3> Điện thoại: 0908281090</h3>
								<pre>
								Nguyen Viet Quoc Fresher  DeveloperFresher  developer with IT knowledge and experience gained during projects / assignments at university. A strong responsible, commitment person with mindset of continuous learning and improving.
								Successfully built employee management websites using various technologies:
									NodeJs Express and React:
										Web link: https://quoc-react-3.herokuapp.com
										Github: https://github.com/quoc269/react-express-demo-quoc

									Python Flask with Data services architect:
										Web link: 
										- Data services: https://data-service-quoc.herokuapp.com	
										- Client: 
										https://client1-python-quoc.herokuapp.com
										https://client2-python-quoc.herokuapp.com
										https://client3-python-quoc.herokuapp.com
										Github: 
										- Data services: https://github.com/quoc269/data-service-python.git
										- Client: 
										https://github.com/quoc269/client1-python-quoc.git
										https://github.com/quoc269/client2-python-quoc.git
										https://github.com/quoc269/client3-python-quoc.git

									PHP codeigniter:
										Web link: https://web1-1988285.herokuapp.com/index.html
										Github: https://github.com/quoc269/quoc-frontend

									HTML, CSS, JavaScript, Jquery, handlebars:
										Web link: https://web1-1988285.herokuapp.com/index.html
										Github: https://github.com/quoc269/quoc-frontend	
								</pre>
                             </div>

                            <!-- /gioi thieu -->							
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