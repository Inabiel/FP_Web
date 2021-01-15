<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model_dashboard extends CI_Model
{
  ///Function menampilkan data
  public function jml_baris($tb)
  {
    $result = $this->db->get($tb);
    if ($result->num_rows() > 0) {
      return $result->num_rows();
    } else {
      return false;
    }
  }
  public function join_tbl()
  {
    $this->db->select('barang.nama_brg, kategori, SUM(jumlah) as jumlah_penjualan, SUM(pesanan.harga) as total_harga');
    $this->db->from('barang');
    $this->db->join('pesanan', 'kode=kode_brg');
    $this->db->group_by('nama_brg');
    $this->db->having('jumlah_penjualan > 0');
    $this->db->order_by('jumlah_penjualan', 'DESC');

    $query = $this->db->get();
    return $query->result();
  }
}
