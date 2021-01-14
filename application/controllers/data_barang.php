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
			$this->load->library('pagination');
			$jumlah_data = $this->Barang_model->jumlah_data('barang');
			$config['base_url'] = base_url('data_barang/index');
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 5;
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
			
			$data['barang'] = $this->Barang_model->data('barang',$config['per_page'], $from);
			$data['pagination'] = $this->pagination->create_links();
			$this->load->view('admin/manajemen_barang',$data);
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