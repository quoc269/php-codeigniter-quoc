<?php  
class Crud extends CI_Controller 
{
  public function __construct()
  {
  /*call CodeIgniter's default Constructor*/
  parent::__construct();
  /*load database libray manually*/
  $this->load->database();
  /*load Model*/
  $this->load->model('Crud_model');
  $this->load->helper('url');
  $this->load->library('session');
  }
    /*Display*/
    public function index()
  {
      $result['data']=$this->Crud_model->display_records();
      $maTheLoai = $this->input->get('mtl');
      $result['sach'] = $this->Crud_model->sach_records($maTheLoai);
      $result['dsSach'] = $this->Crud_model->dsSach();
      $Admin = $this->session->userdata('Nguoi_dung');
      $result['admin'] = $Admin;         
      $GioHang = $this->session->userdata('Gio_hang');
      if( $GioHang == null){
        $this->session->set_userdata('Gio_hang', $GioHang);       
      }
      $GioHang = $this->session->userdata('Gio_hang');                  
      $result['gioHang'] =  $GioHang;  
      $KhachHang = $this->session->userdata('KH');
      $result['KH'] = $KhachHang;     
      $this->load->view('index',$result);
  }

 # tim kiem trang chu
public function tim_kiem_trang_chu(){
  if($this->input->post('btnTimKiem')){
      $result['data']=$this->Crud_model->display_records();
      $tuKhoa= $this->input->post('txtTuKhoa');
      $maTheLoai = $this->input->get('mtl');
      $result['sach'] = $this->Crud_model->sach_records($maTheLoai);
      $result['dsSach'] = $this->Crud_model->timKiem($tuKhoa);
      $Admin = $this->session->userdata('Nguoi_dung');
      $result['admin'] = $Admin;         
      $GioHang = $this->session->userdata('Gio_hang');
      if( $GioHang == null){
        $this->session->set_userdata('Gio_hang', $GioHang);       
      }
      $GioHang = $this->session->userdata('Gio_hang');                  
      $result['gioHang'] =  $GioHang;  
      $KhachHang = $this->session->userdata('KH');
      $result['KH'] = $KhachHang;     
      $this->load->view('index',$result);
  }
} 
#Dang nhap admin
  public function login_admin(){
    $this->load->view('login-admin');
  }
#Thoat Dang nhap
  public function logout_admin(){
    if($this->session->userdata('Nguoi_dung') != null){
      $this->session->unset_userdata('Nguoi_dung');
    }
    if($this->session->userdata('KH') != null){
      $this->session->unset_userdata('KH');
      $this->session->unset_userdata('Gio_hang');

    }
 
    redirect('/');
  }
#xu ly login
  public function xl_login_admin(){
    if($this->input->post('login')){
      $user=$this->input->post('uname');
      $password=$this->input->post('psw');
      $row =  $this->Crud_model->admin_login($user, $password);      
      if(count($row) > 0)
      {
      $this->session->set_userdata('Nguoi_dung', $row);
     # redirect('/');
     $result['data']=$this->Crud_model->display_records();
     $maTheLoai = $this->input->get('mtl');
     $result['sach'] = $this->Crud_model->sach_records($maTheLoai);
     $result['dsSach'] = $this->Crud_model->dsSach();
     $Admin = $this->session->userdata('Nguoi_dung');
     $result['admin'] = $Admin;
     $GioHang = $this->session->userdata('Gio_hang');
      if( $GioHang == null){
        $this->session->set_userdata('Gio_hang', $GioHang);       
      }
      $GioHang = $this->session->userdata('Gio_hang');                  
      $result['gioHang'] =  $GioHang;  
      $KhachHang = $this->session->userdata('KH');
      $result['KH'] = $KhachHang;
     $this->load->view('admin-page',$result);
      }else{
        $Admin = $this->session->userdata('Nguoi_dung');
        $result['admin'] = $Admin;         
        $GioHang = $this->session->userdata('Gio_hang');
        if( $GioHang == null){
          $this->session->set_userdata('Gio_hang', $GioHang);       
        }
        $GioHang = $this->session->userdata('Gio_hang');                  
        $result['gioHang'] =  $GioHang;  
        $KhachHang = $this->session->userdata('KH');
        $result['KH'] = $KhachHang; 
        $this->load->view('login-admin', $result);
      }

    }
  }
# trang cua admin
public function crud_admin(){
      $result['data']=$this->Crud_model->display_records();
      $maTheLoai = $this->input->get('mtl');
      $result['sach'] = $this->Crud_model->sach_records($maTheLoai);
      $result['dsSach'] = $this->Crud_model->dsSach();
      $Admin = $this->session->userdata('Nguoi_dung');
      $result['admin'] = $Admin;         
      $GioHang = $this->session->userdata('Gio_hang');
      if( $GioHang == null){
        $this->session->set_userdata('Gio_hang', $GioHang);       
      }
      $GioHang = $this->session->userdata('Gio_hang');                  
      $result['gioHang'] =  $GioHang;  
      $KhachHang = $this->session->userdata('KH');
      $result['KH'] = $KhachHang;
  $this->load->view('admin-page',$result);
}

# man hinh sua sach
public function sua_sach(){
      $result['data']=$this->Crud_model->display_records();
      $maTheLoai = $this->input->get('mtl');
      $result['sach'] = $this->Crud_model->sach_records($maTheLoai);
      $result['dsSach'] = $this->Crud_model->dsSach();
      $Admin = $this->session->userdata('Nguoi_dung');
      $result['admin'] = $Admin;         
      $GioHang = $this->session->userdata('Gio_hang');
      if( $GioHang == null){
        $this->session->set_userdata('Gio_hang', $GioHang);       
      }
      $GioHang = $this->session->userdata('Gio_hang');                  
      $result['gioHang'] =  $GioHang;  
      $KhachHang = $this->session->userdata('KH');
      $result['KH'] = $KhachHang;
  $maSach = $this->input->get('ms');
  $result['SachSua'] = $this->Crud_model->timSach($maSach);
  $this->load->view('sua-sach',$result);
  }

# man hinh sua sach
public function mh_xoa_sach(){
  $result['data']=$this->Crud_model->display_records();
  $maTheLoai = $this->input->get('mtl');
  $result['sach'] = $this->Crud_model->sach_records($maTheLoai);
  $result['dsSach'] = $this->Crud_model->dsSach();
  $Admin = $this->session->userdata('Nguoi_dung');
  $result['admin'] = $Admin;         
  $GioHang = $this->session->userdata('Gio_hang');
  if( $GioHang == null){
    $this->session->set_userdata('Gio_hang', $GioHang);       
  }
  $GioHang = $this->session->userdata('Gio_hang');                  
  $result['gioHang'] =  $GioHang;  
  $KhachHang = $this->session->userdata('KH');
  $result['KH'] = $KhachHang;
  $maSach = $this->input->get('ms');
  $result['SachSua'] = $this->Crud_model->timSach($maSach);
  $this->load->view('xoa-sach',$result);
  }


# cap nhat sach
public function update_sach(){
  if($this->input->post('btnSua')){
    $Tuasach=$this->input->post('txtTuaSach');
    $TinhTrang = $this->input->post('txtTinhTrang');
    $giaThue = $this->input->post('txtGiaThue');
    $urlHinh = $this->input->post('txtURL');
    $id =  $this->input->post('txtID');
    $this->Crud_model->suaSach($Tuasach, $urlHinh, $giaThue, $TinhTrang, $id );
    redirect('Crud/crud_admin');
  }  
}



#xoa sach
public function xoa_sach(){
  if($this->input->post('btnXoa')){
    $id =  $this->input->post('txtID');
    $this->Crud_model->xoaSach($id);
    redirect('Crud/crud_admin');
  }  
  }

 #man hinh them sach 
 public function mh_them_sach(){
     $result['data']=$this->Crud_model->display_records();
      $maTheLoai = $this->input->get('mtl');
      $result['sach'] = $this->Crud_model->sach_records($maTheLoai);
      $result['dsSach'] = $this->Crud_model->dsSach();      
      $Admin = $this->session->userdata('Nguoi_dung');
      $result['admin'] = $Admin;         
      $GioHang = $this->session->userdata('Gio_hang');
      if( $GioHang == null){
        $this->session->set_userdata('Gio_hang', $GioHang);       
      }
      $GioHang = $this->session->userdata('Gio_hang');                  
      $result['gioHang'] =  $GioHang;  
      $KhachHang = $this->session->userdata('KH');
      $result['KH'] = $KhachHang;     
  $this->load->view('them-sach', $result);
 } 

# them sach
public function them_sach(){
  if($this->input->post('btnThem')){
    $data['id'] = $this->input->post('txtID');
    $data['Tuasach']=$this->input->post('txtTuaSach');
    $data['TrangThai'] = $this->input->post('txtTinhTrang');
    $data['giathue'] = $this->input->post('txtGiaThue');
    $data['URLHinh'] = $this->input->post('txtURL');
    $data['ThuocTheLoai'] = $this->input->post('txtThuocTheLoai');
    $response=$this->Crud_model->themSach($data);
			if($response==true){
        redirect('Crud/crud_admin');
			}
			else{
					echo "Insert error !";
			} 
  }
}

#tim kiem
public function tim_kiem(){
  if($this->input->post('btnTimKiem')){
    $result['data']=$this->Crud_model->display_records();
    $tuKhoa= $this->input->post('txtTuKhoa');
    $maTheLoai = $this->input->get('mtl');
    $result['sach'] = $this->Crud_model->sach_records($maTheLoai);
    $result['dsSach'] = $this->Crud_model->timKiem($tuKhoa);   
    $Admin = $this->session->userdata('Nguoi_dung');
    $result['admin'] = $Admin;         
    $GioHang = $this->session->userdata('Gio_hang');
    if( $GioHang == null){
      $this->session->set_userdata('Gio_hang', $GioHang);       
    }
    $GioHang = $this->session->userdata('Gio_hang');                  
    $result['gioHang'] =  $GioHang;  
    $KhachHang = $this->session->userdata('KH');
    $result['KH'] = $KhachHang;
    $this->load->view('admin-page',$result);
  }
}

public function thue_sach(){
  
  if($this->input->post('btnThue')){
    $KhachHang = $this->session->userdata('KH');   
    if($KhachHang != null ){
      $tts =  $this->input->post('txtTrangThai');
      if($tts ==1){
        $id = $this->input->post('txtID');
        $sachThue= $this->Crud_model->timSach($id);   
        $Tuasach = "";
        $giathue = 0;
        foreach($sachThue as $row){
          $Tuasach = $row->Tuasach;
          $giaThue = $row-> giathue;
        }  
        $sachThueArr = array("Tuasach" => $Tuasach, "giathue" => $giaThue, "id" =>$id);
        $GioHang = $this->session->userdata('Gio_hang');      
        $GioHang[$id] = $sachThueArr;  
        $this->session->set_userdata('Gio_hang', $GioHang);
      }
      
      #var_dump($GioHang);
      redirect("/");
    }else{
      $Admin = $this->session->userdata('Nguoi_dung');
      $result['admin'] = $Admin;         
      $GioHang = $this->session->userdata('Gio_hang');
      if( $GioHang == null){
        $this->session->set_userdata('Gio_hang', $GioHang);       
      }
      $GioHang = $this->session->userdata('Gio_hang');                  
      $result['gioHang'] =  $GioHang;  
      $KhachHang = $this->session->userdata('KH');
      $result['KH'] = $KhachHang;  
        
      $this->load->view('dang-nhap-khach-hang', $result);
    }
   
  
    
  }else{
    echo "error roi anh Quoc oi";
  }
  
}

#Dang nhap thue sach
public function dang_nhap_khach_hang(){  
  $this->load->view('dang-nhap-khach-hang');
}
#Xl dang nhap khach hang
public function xl_dang_nhap_khach_hang(){
  if($this->input->post('login')){
    $user=$this->input->post('uname');
    $password=$this->input->post('psw');
    $row =  $this->Crud_model->khach_login($user, $password);      
    if(count($row) > 0)
    {
    $this->session->set_userdata('KH', $row);
   redirect('/');
   
    }else{
      $Admin = $this->session->userdata('Nguoi_dung');
      $result['admin'] = $Admin;         
      $GioHang = $this->session->userdata('Gio_hang');
      if( $GioHang == null){
        $this->session->set_userdata('Gio_hang', $GioHang);       
      }
      $GioHang = $this->session->userdata('Gio_hang');                  
      $result['gioHang'] =  $GioHang;  
      $KhachHang = $this->session->userdata('KH');
      $result['KH'] = $KhachHang;    

      $this->load->view('dang-nhap-khach-hang', $result);
    }

  }
}
# Gio hang
public function gio_hang(){
  $GioHang = $this->session->userdata('Gio_hang');  
    if($GioHang != null){
    $result['data']=$this->Crud_model->display_records();
    $maTheLoai = $this->input->get('mtl');
    $result['sach'] = $this->Crud_model->sach_records($maTheLoai);
    $result['dsSach'] = $this->Crud_model->dsSach();
    $Admin = $this->session->userdata('Nguoi_dung');
    $result['admin'] = $Admin;         
    $GioHang = $this->session->userdata('Gio_hang');
    $GioHang = $this->session->userdata('Gio_hang');                  
    $result['gioHang'] =  $GioHang;  
    $KhachHang = $this->session->userdata('KH');
    $result['KH'] = $KhachHang;     
    $this->load->view('trang-gio-hang', $result);
  }else{
    redirect("/");
  }
  }
 
#Huy sach gio hang
public function huy_sach(){
  $GioHang = $this->session->userdata('Gio_hang'); 
  if($GioHang != null){
    $maSach = $this->input->get('ms');
    foreach($GioHang as $k=>$v){
      if($GioHang[$k]['id'] == $maSach){
        unset($GioHang["$k"]);
        $this->session->set_userdata('Gio_hang', $GioHang); 
        redirect("Crud/gio_hang");
      }
    }
  }
}

#Huy sach thanh toan
public function huy_sach_thanh_toan(){
  $GioHang = $this->session->userdata('Gio_hang'); 
  if($GioHang != null){
    $maSach = $this->input->get('ms');
    foreach($GioHang as $k=>$v){
      if($GioHang[$k]['id'] == $maSach){
        unset($GioHang["$k"]);
        $this->session->set_userdata('Gio_hang', $GioHang); 
        redirect("Crud/thanh_toan");
      }
    }
  }
}


#Thanh toan
public function thanh_toan(){    
  $result['data']=$this->Crud_model->display_records();
  $maTheLoai = $this->input->get('mtl');
  $result['sach'] = $this->Crud_model->sach_records($maTheLoai);
  $result['dsSach'] = $this->Crud_model->dsSach();
  $Admin = $this->session->userdata('Nguoi_dung');
  $result['admin'] = $Admin; 
  $GioHang = $this->session->userdata('Gio_hang');                  
  $result['gioHang'] =  $GioHang;  
  $KhachHang = $this->session->userdata('KH');
  $result['KH'] = $KhachHang;     
  $this->load->view('thanh-toan', $result);

}

#dang ky thanh vien
public function dang_ky(){
  $Admin = $this->session->userdata('Nguoi_dung');
  $result['admin'] = $Admin;         
  $GioHang = $this->session->userdata('Gio_hang');
  if( $GioHang == null){
    $this->session->set_userdata('Gio_hang', $GioHang);       
  }
  $GioHang = $this->session->userdata('Gio_hang');                  
  $result['gioHang'] =  $GioHang;  
  $KhachHang = $this->session->userdata('KH');
  $result['KH'] = $KhachHang;
  $this->load->view('dang-ky', $result);
}

#xu ly dang ky

public function xl_dang_ky(){
  if($this->input->post('btnDangKy')){
    $data['user'] = $this->input->post('uname');
    $data['pass']=$this->input->post('psw'); 
    $response=$this->Crud_model->dangKyThanhVien($data);
			if($response==true){
        $row =  $this->Crud_model->khach_login($data['user'],$data['pass']);      
        if(count($row) > 0)
        {
        $this->session->set_userdata('KH', $row);
       redirect('/');
       
        }else{
          $this->load->view('dang-nhap-khach-hang');
        }
        
			}
			else{
					echo "Insert error !";
			} 
  }
}

#them mot don hang

public function ket_thuc_thanh_toan(){
  if($this->input->post('btnThanhToan')){ 
    $data['ngay'] = date("Y-m-d H:m:s"); 
    $data['email']=$this->input->post('txtEmail'); 
    $data['dien_thoai'] = $this->input->post('txtDienThoai');
    $data['dia_chi']=$this->input->post('txtDiaChi');
    $data['gio_hang'] = $this->input->post('txtGioHang');
    $data['trang_thai'] = false;
    $response=$this->Crud_model->themDonHang($data);
    
			if($response==true){
        #cap nhat tinh trang sach
        $gio_Hang_Chuoi = $this->input->post('txtGioHang');
        $gio_Hang_Json = json_decode($gio_Hang_Chuoi);
        foreach($gio_Hang_Json as $sach){     
          $maSach = $sach -> id;
          $this->Crud_model->capNhatTinhTrangSach_ThanhToan($maSach);

        }
    # /cap nhat tinh trang sach
        $this->session->unset_userdata('Gio_hang');
         redirect('/');       
        } 
			else{
					echo "Insert error !";
			} 
  }
}
# trang gioi thieu
public function trang_gioi_thieu(){
      $result['data']=$this->Crud_model->display_records();
      $maTheLoai = $this->input->get('mtl');
      $result['sach'] = $this->Crud_model->sach_records($maTheLoai);
      $result['dsSach'] = $this->Crud_model->dsSach();
      $Admin = $this->session->userdata('Nguoi_dung');
      $result['admin'] = $Admin;         
      $GioHang = $this->session->userdata('Gio_hang');
      if( $GioHang == null){
        $this->session->set_userdata('Gio_hang', $GioHang);       
      }
      $GioHang = $this->session->userdata('Gio_hang');                  
      $result['gioHang'] =  $GioHang;  
      $KhachHang = $this->session->userdata('KH');
      $result['KH'] = $KhachHang;     
      $this->load->view('gioi-thieu',$result);
}

#lien he 
public function trang_lien_he(){
  $result['data']=$this->Crud_model->display_records();
  $maTheLoai = $this->input->get('mtl');
  $result['sach'] = $this->Crud_model->sach_records($maTheLoai);
  $result['dsSach'] = $this->Crud_model->dsSach();
  $Admin = $this->session->userdata('Nguoi_dung');
  $result['admin'] = $Admin;         
  $GioHang = $this->session->userdata('Gio_hang');
  if( $GioHang == null){
    $this->session->set_userdata('Gio_hang', $GioHang);       
  }
  $GioHang = $this->session->userdata('Gio_hang');                  
  $result['gioHang'] =  $GioHang;  
  $KhachHang = $this->session->userdata('KH');
  $result['KH'] = $KhachHang;     
  $this->load->view('lien-he',$result);
}

public function xem_don_hang(){
  $result['data']=$this->Crud_model->display_records();
  $maTheLoai = $this->input->get('mtl');
  $result['sach'] = $this->Crud_model->sach_records($maTheLoai);
  $result['dsSach'] = $this->Crud_model->dsSach();
  $Admin = $this->session->userdata('Nguoi_dung');
  $result['admin'] = $Admin;         
  $GioHang = $this->session->userdata('Gio_hang');
  if( $GioHang == null){
    $this->session->set_userdata('Gio_hang', $GioHang);       
  }
  $GioHang = $this->session->userdata('Gio_hang');                  
  $result['gioHang'] =  $GioHang;  
  $KhachHang = $this->session->userdata('KH');
  $result['KH'] = $KhachHang;  
  $result['donHang'] =  $this->Crud_model->xemDonHang(); 
  $this->load->view('xem-don-hang',$result);
}

#cap nhat don hang 
public function update_don_hang(){
    $maDonHang = $this->input->get('mdh');
    $this->Crud_model->xacNhanGiaoHang($maDonHang);
    redirect('Crud/xem_don_hang');  
}

#trang quan ly the loai sach
public function admin_the_loai_sach(){
  $result['data']=$this->Crud_model->display_records();
  $result['loaiSach'] = $this->Crud_model->display_records();
  $maTheLoai = $this->input->get('mtl');
  $result['sach'] = $this->Crud_model->sach_records($maTheLoai);
  $result['dsSach'] = $this->Crud_model->dsSach();
  $Admin = $this->session->userdata('Nguoi_dung');
  $result['admin'] = $Admin;         
  $GioHang = $this->session->userdata('Gio_hang');
  if( $GioHang == null){
    $this->session->set_userdata('Gio_hang', $GioHang);       
  }
  $GioHang = $this->session->userdata('Gio_hang');                  
  $result['gioHang'] =  $GioHang;  
  $KhachHang = $this->session->userdata('KH');
  $result['KH'] = $KhachHang;
  $this->load->view('admin-the-loai-sach',$result);
}

#tim kiem theo the loai
public function tim_kiem_theo_the_loai(){
  if($this->input->post('btnTimKiem')){
    $result['data']=$this->Crud_model->display_records();
    $tuKhoa= $this->input->post('txtTuKhoa');
    $maTheLoai = $this->input->get('mtl');
    $result['sach'] = $this->Crud_model->sach_records($maTheLoai);
    $result['loaiSach'] = $this->Crud_model->timKiemTheoTheLoai($tuKhoa);   
    $Admin = $this->session->userdata('Nguoi_dung');
    $result['admin'] = $Admin;         
    $GioHang = $this->session->userdata('Gio_hang');
    if( $GioHang == null){
      $this->session->set_userdata('Gio_hang', $GioHang);       
    }
    $GioHang = $this->session->userdata('Gio_hang');                  
    $result['gioHang'] =  $GioHang;  
    $KhachHang = $this->session->userdata('KH');
    $result['KH'] = $KhachHang;
    $this->load->view('admin-the-loai-sach',$result);
  }
}

# man hinh sua THE LOAI SACH
public function sua_the_loai(){
  $result['data']=$this->Crud_model->display_records();
  $maTheLoai = $this->input->get('mtl');
  $result['sach'] = $this->Crud_model->sach_records($maTheLoai);
  $result['dsSach'] = $this->Crud_model->dsSach();
  $Admin = $this->session->userdata('Nguoi_dung');
  $result['admin'] = $Admin;         
  $GioHang = $this->session->userdata('Gio_hang');
  if( $GioHang == null){
    $this->session->set_userdata('Gio_hang', $GioHang);       
  }
  $GioHang = $this->session->userdata('Gio_hang');                  
  $result['gioHang'] =  $GioHang;  
  $KhachHang = $this->session->userdata('KH');
  $result['KH'] = $KhachHang;
$tl = $this->input->get('tl');
$result['TheLoaiSua'] = $this->Crud_model->timTheLoai($tl);
$this->load->view('mh_sua_the_loai',$result);
}

#CẬP NHẬT THỂ LOẠI

public function update_The_loai(){
  if($this->input->post('btnSua')){
    $Ten=$this->input->post('txtTenTheLoai');    
    $urlHinh = $this->input->post('txtURL');
    $Id =  $this->input->post('txtID');
    $this->Crud_model->suaTheLoai($Ten, $urlHinh, $Id );
    redirect('Crud/admin_the_loai_sach');
  }  
}
# MÀN HÌNH THÊM THỂ LOẠI 
public function mh_them_the_loai(){
  $result['data']=$this->Crud_model->display_records();
   $maTheLoai = $this->input->get('mtl');
   $result['sach'] = $this->Crud_model->sach_records($maTheLoai);
   $result['dsSachTheLoai'] = $this->Crud_model->danhSachTheLoai();
   $Admin = $this->session->userdata('Nguoi_dung');
   $result['admin'] = $Admin;         
   $GioHang = $this->session->userdata('Gio_hang');
   if( $GioHang == null){
     $this->session->set_userdata('Gio_hang', $GioHang);       
   }
   $GioHang = $this->session->userdata('Gio_hang');                  
   $result['gioHang'] =  $GioHang;  
   $KhachHang = $this->session->userdata('KH');
   $result['KH'] = $KhachHang;     
$this->load->view('mh-them-the-loai', $result);
} 
# THÊM THỂ LOẠI SÁCH
# them sach
public function them_the_loai(){
  if($this->input->post('btnThem')){
    $data['Id'] = $this->input->post('txtID');
    $data['TenTheloaiSach']=$this->input->post('txtTenTheLoai');   
    $data['url_the_loai'] = $this->input->post('txtURL');   
    $response=$this->Crud_model->themTheLoaiSach($data);
			if($response==true){
        redirect('Crud/admin_the_loai_sach');
			}
			else{
					echo "Insert error !";
			} 
  }
}

# MÀN HÌNH XÓA THỂ LOẠI SÁCH
public function mh_xoa_the_loai(){
  $result['data']=$this->Crud_model->display_records();
  $maTheLoai = $this->input->get('mtl');
  $result['sach'] = $this->Crud_model->sach_records($maTheLoai);
  $result['dsSach'] = $this->Crud_model->dsSach();
  $Admin = $this->session->userdata('Nguoi_dung');
  $result['admin'] = $Admin;         
  $GioHang = $this->session->userdata('Gio_hang');
  if( $GioHang == null){
    $this->session->set_userdata('Gio_hang', $GioHang);       
  }
  $GioHang = $this->session->userdata('Gio_hang');                  
  $result['gioHang'] =  $GioHang;  
  $KhachHang = $this->session->userdata('KH');
  $result['KH'] = $KhachHang;
$tl = $this->input->get('tl');
$result['TheLoaiSua'] = $this->Crud_model->timTheLoai($tl);
$this->load->view('mh-xoa-the-loai',$result);
}

#XÓA THỂ LOẠI
public function xoa_the_loai_sach(){
  if($this->input->post('btnXoa')){
    $id =  $this->input->post('txtID');    
    $this->Crud_model->xoaTheLoai($id);
    redirect('Crud/admin_the_loai_sach');
  }  
  }
#==================================================================================
}


?>