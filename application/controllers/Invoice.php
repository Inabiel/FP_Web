<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Invoice extends CI_Controller
{
  public function index()
  {
    $data['invoice'] = $this->model_invoice->tampil_data();
    $this->load->view('admin/invoice', $data);
  }
  public function detail($id_invoice)
  {
    $data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
    $data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
    $this->load->view('admin/detail_invoice', $data);
  }
}
