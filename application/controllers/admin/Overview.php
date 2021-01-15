<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Overview extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['jumlah_mentah'] = $this->Model_dashboard->jml_baris('barang_mentah');
		$data['jumlah_pesanan'] = $this->Model_dashboard->jml_baris('invoice');
		$data['jumlah_barang'] = $this->Model_dashboard->jml_baris('barang');
		$data['jumlah_request'] = $this->Model_dashboard->jml_baris('request');
		$data['join'] = $this->Model_dashboard->join_tbl();
		$this->load->view('admin/admin_dash', $data);
	}
}
