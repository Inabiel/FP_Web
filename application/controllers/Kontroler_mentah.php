<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class kontroler_mentah extends CI_Controller
{
  function index()
  {
    $data = array(
      'barang_mentah' => $this->Barang_model->tampil_barangmentah()
    );
    $this->load->view('admin/barang_mentah', $data);
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