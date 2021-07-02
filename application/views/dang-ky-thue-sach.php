 
      
        

        <!--modal login khach-->
        <div class="modal" id="myModalKhachThue" data-backdrop="false">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header bg-warning">
                  <h4 class="modal-title">Khách hàng Login Form</h4>
                  <button type="button" class="close bg-danger" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  <form action="http://php-quoc.epizy.com/Crud/xl_dang_nhap_khach_hang" method="post">
                      <div class="imgcontainer text-center">
                        <img src="../../images/khach_hang_avatar.png" style="width:200px; height:200px;" alt="Avatar" class="rounded-circle">
                      </div>
                    
                      <div class="container">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" class="form-control" required>
                    
                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" class="form-control" required> <br>
                            
                        <div><input type="submit" name="login"  value="LOG IN" class="btn btn-primary orm-control"></div> <br>
                        <label>
                          <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                      </div>
                    
                      <div class="container" style="background-color:#f1f1f1">
                        <a href="http://php-quoc.epizy.com/Crud/dang_ky" class="btn btn-danger">ĐĂNG KÝ </a>
                        <span class="psw">  <a href="#">Forgot password?</a></span>
                      </div>
                    </form>
                </div>
                
               
                
              </div>
            </div>
          </div>
        <!--/modal login khach-->
   
    <!--admin login -->