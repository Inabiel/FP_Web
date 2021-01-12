<?php
defined('BASEPATH') or exit('No direct script access allowed');
class request extends CI_Controller
{
    public function index(){
        $data['requests'] = $this->Barang_model->tampil_request()->result();
		$this->load->view('admin/manajemen_request', $data);
    }
    public function req_done(){
		$this->load->view('user/request_berhasil');
    }
    public function hapus_from_request($id){
        $location = array('id_request' => $id);
        $this->Barang_model->hapus_data($location, 'request');
        redirect('request/index');
    }
}