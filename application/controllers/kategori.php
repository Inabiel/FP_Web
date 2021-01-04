<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kategori extends CI_Controller
{
    public function pagar(){
      $this->load->view('kategori/pagar');
    }
    public function atap(){
    $this->load->view('kategori/atap');
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