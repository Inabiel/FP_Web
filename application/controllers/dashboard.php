<?php
defined('BASEPATH') or exit('No direct script access allowed');
class dashboard extends CI_Controller
{
    public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') == ''){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Anda Belum Login!
					</div>');
			redirect('auth/login');
		}
    }
    public function detail_brg($id){
    $data['barang'] = $this->Barang_model->detail_brg($id);
    $this->load->view('kategori/detail_brg', $data);
    }
}