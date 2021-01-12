<?php
defined('BASEPATH') or exit('No direct script access allowed');
class data_barang extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role_id') == '') {
			redirect('auth/login');
		}
	}
public function index(){
    {
		$data['barang'] = $this->Barang_model->tampil_data()->result();
		$this->load->view('admin/manajemen_barang', $data);
	}
}
}