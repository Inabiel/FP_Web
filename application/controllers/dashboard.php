<?php
defined('BASEPATH') or exit('No direct script access allowed');
class dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role_id') == '') {
			redirect('auth/login');
		}
	}

	public function detail_brg($id)
	{
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
	public function delete_cart()
	{
		$this->cart->destroy();
		redirect('jasa');
	}
	public function pesan()
	{
		$this->load->view('user/pesan');
	}
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
	public function proses_pesan()
	{
		$is_processed = $this->model_invoice->index();
		if ($is_processed) {
			$this->cart->destroy();
			$this->load->view('user/proses_pesan');
		} else {
			echo "Maaf Pesanan Anda Gagal Diproses";
		}
	}
	public function manajemen_barang($id)
	{
		$data['barang'] = $this->Barang_model->detail_brg($id);
		$this->load->view('admin/manajemen_barang', $data);
	}
}