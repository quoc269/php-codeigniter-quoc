<?php
class Crud_model extends CI_Model 
{
  
    function display_records()
  {
    $query=$this->db->get("theloaisach");
    return $query->result();
  }
	function dsSach(){
    $query=$this->db->get("sach");
    return $query->result();
  }
  function sach_records($maTheLoai){      
   $this->db->where('ThuoctheLoai', $maTheLoai);  
   $query= $this->db->get("sach");
    return $query->result();
  }

  function admin_login($user, $pass){
    $query=$this->db->query("select * from user where user='$user' and pass='$pass'");
    return $query->result();
  }

  function khach_login($user, $pass){
    $query=$this->db->query("select * from khach where user='$user' and pass='$pass'");
    return $query->result();
  }


  function timSach($id){
    $this->db->where('id', $id); 
    $query= $this->db->get("sach");
    return $query -> result();

  }
  #update
  function suaSach($Tuasach,$URLHinh,$giathue,$TrangThai,$id)	{
	$query=$this->db->query("update sach SET Tuasach= '$Tuasach', URLHinh= '$URLHinh', giathue='$giathue', TrangThai= '$TrangThai' where id= '$id' "); 
	}
  #update don hang
  function xacNhanGiaoHang($id)	{
    $query=$this->db->query("update thanh_toan SET trang_thai= true where id= '$id' "); 
    }
  #delete
  function xoaSach($id){
    $this->db->where("id", $id);
    $this->db->delete("sach");
    return true;
  }

  #them sach
  function themSach($data){
    $this->db->insert('sach',$data);
    return true;
  }

  #tim kiem
  function timKiem($tuKhoa){
    $query=$this->db->query("select * from sach where Tuasach LIKE '%$tuKhoa%' or giathue LIKE '%$tuKhoa%'  ");
    return $query->result();
  }
  
# dang ky thanh vien
function dangKyThanhVien($data){
  $this->db->insert('khach',$data);
  return true;
}

# them don hang
function themDonHang($data){
  $this->db->insert('thanh_toan',$data);
  return true;
}
#cap nhat lai tinh trang sach khi khach dat hang
function capNhatTinhTrangSach_ThanhToan($maSach)	{
  $query=$this->db->query("update sach SET TrangThai= 0 where id= '$maSach' "); 
  }
# xem don hang
function xemDonHang(){
 # $query=$this->db->get("thanh_toan");
 $query= $this -> db-> query ("select * from thanh_toan order by id desc");
  return $query->result();
}

#tim kiem theo the loai 
#tim kiem
function timKiemTheoTheLoai($tuKhoa){
  $query=$this->db->query("select * from theloaisach where Id LIKE '%$tuKhoa%' or TenTheloaiSach LIKE '%$tuKhoa%'  ");
  return $query->result();
}

#tim mot the loai sach 
function timTheLoai($Id){
  $this->db->where('Id', $Id); 
  $query= $this->db->get("theloaisach");
  return $query -> result();

}

#sua mot the loai
function suaTheLoai($Ten,$URLHinh,$Id)	{
	$query=$this->db->query("update theloaisach SET TenTheloaiSach= '$Ten', url_the_loai= '$URLHinh' where Id= '$Id' "); 
	}
# danh sach the loai
function danhSachTheLoai()
  {
    $query=$this->db->get("theloaisach");
    return $query->result();
  }

# them mot the loại sách
function themTheLoaiSach($data){
  $this->db->insert('theloaisach',$data);
  return true;
}

# xoa mot thể loại
function xoaTheLoai($Id){
  $this->db ->where("ThuocTheLoai", $Id);
  $this->db->delete("sach");
  $this->db->where("Id", $Id);
  $this->db->delete("theloaisach");
  return true;
}
#===================================================================================
} 

?>