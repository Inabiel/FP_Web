<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kategori extends CI_Controller
{
    public function pagar(){
    $data['pagar'] = $this->Barang_model->get_category('Pagar')->result();
    $this->load->view('kategori/pagar',$data);
    }
    public function atap(){
    $data['atap'] = $this->Barang_model->get_category('Atap')->result();
    $this->load->view('kategori/atap',$data);
    }
    public function tralis(){
        $this->load->view('kategori/tralis');
    }
    public function pintu(){
        $this->load->view('kategori/pintu');
    }
    public function kusen(){
        $this->load->view('kategori/kusen');
    }
    public function rangka(){
        $this->load->view('kategori/rangka');
    }
}