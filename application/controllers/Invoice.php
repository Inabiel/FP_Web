<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Invoice extends CI_Controller
{
  public function index()
  {
    $this->load->library('pagination');
    $jumlah_data = $this->Barang_model->jumlah_data('invoice');
    $config['base_url'] = base_url('Invoice/index');
    $config['total_rows'] = $jumlah_data;
    $config['per_page'] = 10;
    $from = $this->uri->segment(3);
    
    //Pagination settings
    $config['first_link']       = 'First';
    $config['last_link']        = 'Last';
    $config['next_link']        = 'Next';
    $config['prev_link']        = 'Prev';
    $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
    $config['full_tag_close']   = '</ul></nav></div>';
    $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
    $config['num_tag_close']    = '</span></li>';
    $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
    $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
    $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
    $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['prev_tagl_close']  = '</span>Next</li>';
    $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
    $config['first_tagl_close'] = '</span></li>';
    $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['last_tagl_close']  = '</span></li>';
    $this->pagination->initialize($config);
    
    $data['invoice'] = $this->Barang_model->data('invoice',$config['per_page'], $from);
    $data['pagination'] = $this->pagination->create_links();
    $this->load->view('admin/invoice',$data);
  }
  public function detail($id_invoice)
  {
    $data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
    $data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
    $this->load->view('admin/detail_invoice', $data);
  }
}