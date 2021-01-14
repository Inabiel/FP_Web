<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class Kontroler_mentah extends CI_Controller
{
  function index()
  {
    $this->load->library('pagination');
    $jumlah_data = $this->Barang_model->jumlah_data('barang_mentah');
    $config['base_url'] = base_url('Kontroler_mentah/index');
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
    
    $data['barang_mentah'] = $this->Barang_model->data('barang_mentah',$config['per_page'], $from);
    $data['pagination'] = $this->pagination->create_links();
    $this->load->view('admin/barang_mentah',$data);
  }

  function add()
  {
    $data = array(
      'isi' => 'admin/mentah_add'
    );
    $this->load->view('admin/mentah_add', $data);
  }

  function save()
  {
    $nama_barang_mentah = $this->input->post('nama_barang_mentah');
    $stok = $this->input->post('stok');

    $data = array(
      'nama_barang_mentah' => $nama_barang_mentah,
      'stok' => $stok
    );

    $this->Barang_model->tambah_value($data, 'barang_mentah');
    redirect('kontroler_mentah');
  }

  function edit($id_barang_mentah)
  {
    $where = array('id_barang_mentah' => $id_barang_mentah);
    $data = array(
      'barang_mentah' => $this->Barang_model->edit_data($where, 'barang_mentah')->result(),
    );
    $this->load->view('admin/mentah_edit', $data);
  }

  function update()
  {
    $id_barang_mentah = $this->input->post('id_barang_mentah');
    $nama_barang_mentah = $this->input->post('nama_barang_mentah');
    $stok = $this->input->post('stok');

    $data = array(
      'nama_barang_mentah' => $nama_barang_mentah,
      'stok' => $stok
    );

    $where = array(
      'id_barang_mentah' => $id_barang_mentah
    );

    $this->Barang_model->update_data($where, $data, 'barang_mentah');
    redirect('Kontroler_mentah');
  }

  function delete($id_barang_mentah)
  {
    $where = array('id_barang_mentah' => $id_barang_mentah);
    $this->Barang_model->delete_data($where, 'barang_mentah');
    redirect('Kontroler_mentah');
  }
}