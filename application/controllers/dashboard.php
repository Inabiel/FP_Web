<?php
defined('BASEPATH') or exit('No direct script access allowed');
class dashboard extends CI_Controller
{
    public function __construct(){
		parent::__construct();
		if($this->session->userdata('role_id') == ''){
			redirect('auth/login');
		}
	}
	
    public function detail_brg($id){
		$data['barang'] = $this->Barang_model->detail_brg($id);
		$this->load->view('kategori/detail_brg', $data);
	}
	
	public function add_cart($id)
	{
		$barang = $this->Barang_model->cari($id);

		$data = array(
        'id'      => $barang->kode,
        'qty'     => 1,
        'price'   => $barang->harga,
        'name'    => $barang->nama_brg,

	);

		$this->cart->insert($data);
		redirect('jasa');
			
	}
}