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
			$data['barang'] = $this->Barang_model->tampil_barang()->result();
			$this->load->view('admin/manajemen_barang', $data);
		}
	}
	public function add()
	{
		$kode_brg 		= $this->input->post('kode');
		$nama_brg	= $this->input->post('nama_brg');
		$kategori = $this->input->post('kategori');
		$ket_brg		= $this->input->post('ket_brg');
		$harga 			= $this->input->post('harga');
		$stok 			= $this->input->post('stok');
		$gambar 	= $_FILES['gambar']['name'];
		if ($gambar =''){}else{
			$config ['upload_path'] = './assets/images/';
			$config ['allowed_types'] = 'jpg|jpeg|jfif|gif|png';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "GAMBAR GAGAL DI UNGGAH";
			}else {
				$gambar=$this->upload->data('file_name');
			}
		}

		$data = array (
			'kode'	=> $kode_brg,
			'nama_brg'	=> $nama_brg,
			'keterangan'	=> $ket_brg,
			'kategori'	=> $kategori,
			'harga'			=> $harga,
			'stok'			=> $stok,
			'gambar'	=> $gambar
		);

		$this->Barang_model->tambah_value($data, 'barang');
		redirect('manajemen_barang');	
	}
	public function hapus_from_barang($id){
        $location = array('kode' => $id);
        $this->Barang_model->hapus_data($location, 'barang');
        redirect('manajemen_barang');
	}
	
	public function edit_barang($id){
		$where = array('kode' => $id);
		$data = array(
		  'barang' => $this->Barang_model->edit_data($where, 'barang')->result(),
		);
		$this->load->view('admin/barang_edit', $data);
	}
	
	public function update()
	{
	  $kode = $this->input->post('kode_brg');
	  $nama = $this->input->post('nama_brg');
	  $ket = $this->input->post('ket_brg');
	  $kategori = $this->input->post('kategori');
	  $harga = $this->input->post('harga_brg');
	  $stok = $this->input->post('stok_brg');
	  
	  $data = array(
			'kode'	=> $kode,
			'nama_brg'	=> $nama,
			'keterangan'	=> $ket,
			'kategori'	=> $kategori,
			'harga'			=> $harga,
			'stok'			=> $stok,
	  );
  
	  $where = array(
		'kode' => $kode
	  );
  
	  $this->Barang_model->update_data($where, $data, 'barang');
	  redirect('manajemen_barang');
	}
}