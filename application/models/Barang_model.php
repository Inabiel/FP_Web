<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Barang_model extends CI_Model
{
	///Function menampilkan data
	function tampil_barangmentah()
	{
  
	  $result = $this->db->get('barang_mentah');
	  if ($result->num_rows() > 0) {
		return $result->result();
	  } else {
		return false;
	  }
	}
	function data($table,$number,$offset){
		return $query = $this->db->get($table,$number, $offset)->result();		
	}
 
	function jumlah_data($table){
		return $this->db->get($table)->num_rows();
	}
	
	public function tampil_barang(){
		  return $this->db->get('barang');
	  }

	public function tampil_request(){
		return $this->db->get('request');
	}

	////CRUD DISINI
	public function tambah_value($data,$table){
		$this->db->insert($table,$data);
	}
	
	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data($where, $table)
	{
	  return $this->db->get_where($table, $where);
	}

	function update_data($where, $data, $table)
	{
	  $this->db->where($where);
	  //$data berisi inputan yg ingin di update
	  $this->db->update($table, $data);
	}

	function delete_data($where, $table)
	{
	  $this->db->where($where);
	  $this->db->delete($table);
	}
	
	////MISC FUNCTION
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