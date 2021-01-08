<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kategori extends CI_Controller
{
    public function pagar(){
    $data['pagar'] = $this->Barang_model->get_category('Pagar')->result();
    $this->load->view('kategori/pagar',$data);
    }
    public function kanopi(){
    $data['kanopi'] = $this->Barang_model->get_category('Kanopi')->result();
    $this->load->view('kategori/kanopi',$data);
    }
    public function tralis(){
    $data['tralis'] = $this->Barang_model->get_category('Tralis')->result();
    $this->load->view('kategori/tralis', $data);
    }
    public function pintu(){
    $data['pintu'] = $this->Barang_model->get_category('Pintu')->result();
    $this->load->view('kategori/pintu', $data);
    }
    public function kusen(){
    $data['kusen'] = $this->Barang_model->get_category('Kusen')->result();
    $this->load->view('kategori/kusen', $data);
    }
    public function rangka(){
    $data['pintu'] = $this->Barang_model->get_category('Rangka')->result();
    $this->load->view('kategori/rangka', $data);
    }
}