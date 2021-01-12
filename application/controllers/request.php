<?php
defined('BASEPATH') or exit('No direct script access allowed');
class request extends CI_Controller
{
    public function request_to_db(){
        $brg = $this->input->post('nama_barang');
        $tlp = $this->input->post('no_telp');
        $ktr = $this->input->post('keterangan');
        $arr = array(
            'nama_pemesan' => $this->session->userdata('username'),
            'nama_barang' => $brg,
            'no_telp' => $tlp,
            'keterangan' => $ktr
        );
        $insert = $this->Barang_model->tambah_value($arr, 'request');
        redirect('/request/req_done');
    }
    public function index(){
        $data['requests'] = $this->Barang_model->tampil_request()->result();
		$this->load->view('admin/manajemen_request', $data);
    }
    public function req_done(){
		$this->load->view('user/request_berhasil');
    }
}