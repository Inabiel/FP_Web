<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Barang_model extends CI_Model
{
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
}