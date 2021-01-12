<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Barang_model extends CI_Model
{
	public function tampil_data(){
		return $this->db->get('barang');
	}
	public function tampil_request(){
		return $this->db->get('request');
	}
	public function tambah_value($data,$table){
		$this->db->insert($table,$data);
	}
	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
  public function get_category($category){
    return $this->db->get_where("barang", array('kategori'=> $category));
  }
  
  public function detail_brg($id){
    $result = $this->db->where('kode',$id)->get('barang');
		if($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
  }
  public function cari($id)
  {
	  $result = $this->db->where('kode', $id)
						 ->limit(1)
						 ->get('barang');
	  if($result->num_rows() > 0){
		  return $result->row();
	  }else{
		  return array();
	  }
  }
  
}