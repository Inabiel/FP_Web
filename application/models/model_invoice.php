<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model_invoice extends CI_Model
{
  public function index()
  {
    date_default_timezone_set('Asia/Jakarta');
    $no_telp = $this->input->post('no_telp');
    $alamat = $this->input->post('alamat');
    $keterangan = $this->input->post('keterangan');

    $invoice = array(
      'no_telp' => $no_telp,
      'alamat' => $alamat,
      'keterangan' => $keterangan,
      'tgl_pesan' => date('Y-m-d H:i:s'),
      'batas_bayar' => date('Y-m-d H:i:s', mktime(
        date('H'),
        date('i'),
        date('s'),
        date('m'),
        date('d') + 1,
        date('Y')
      )),
    );
    $this->db->insert('invoice', $invoice);
    $id_invoice = $this->db->insert_id();
    $id_user = $this->session->userdata('id');
    foreach ($this->cart->contents() as $item) {
      $data = array(
        'id_user' => $id_user,
        'id_invoice' => $id_invoice,
        'kode_brg' => $item['id'],
        'nama_brg' => $item['name'],
        'jumlah' => $item['qty'],
        'harga' => $item['price'],
      );
      $this->db->insert('pesanan', $data);
    }
    return TRUE;
  }
  public function tampil_data()
  {
    $result = $this->db->get('invoice');
    if ($result->num_rows() > 0) {
      return $result->result();
    } else {
      return false;
    }
  }
}
