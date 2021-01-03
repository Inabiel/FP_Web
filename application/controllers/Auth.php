<?php
defined('BASEPATH') or exit('No direct script access allowed');
//Class yang mengatur alur proses login & register
class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    //Load kebutuhan library, model, helper dll disini
    $this->load->model('auth_model');
  }

  //======Register======
  public function register()
  {
    $this->load->view('user/register');
  }
  public function reg()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules(
      'username',
      'Username',
      'trim|required|is_unique[users.name]|min_length[5]|max_length[12]'
    );
    $this->form_validation->set_rules(
      'password',
      'Password',
      'trim|required|min_length[8]'
    );
    $this->form_validation->set_rules(
      'email',
      'Email',
      'trim|required|is_unique[users.email]|min_length[7]|max_length[20]|valid_email'
    );

    //Membuat kondisi jika terjadi kesalahan pada form
    if ($this->form_validation->run() == FALSE) {
      $errors = $this->form_validation->error_array();
      $this->session->set_flashdata('errors', $errors);
      $this->session->set_flashdata('input', $this->input->post());
      redirect('register');
    } else {
      //Menangkap inputan dari form view dengan method post
      $username = $this->input->post('username');
      $name = $this->input->post('name');
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      //Enkripsi $password di $pass
      $pass = password_hash($password, PASSWORD_DEFAULT);

      //Variable array, menampung data form register
      $data = [
        'username' => $username,
        'name' => $name,
        'email' => $email,
        'password' => $pass
      ];
      //parameter dari model register
      $insert = $this->auth_model->register("users", $data);
      $this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
      redirect('register');
    }
  }
  //======Batas Register=======
  //======Login======
  public function login()
  {
    //Body function login...
    {
      $this->load->view('user/login');
    }
  }
  function signin()
  {
    //Form validasi
    $this->load->library('form_validation');
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    //Kondisi validasi
    if ($this->form_validation->run() == FALSE) {
      $errors = $this->form_validation->error_array();
      $this->session->set_flashdata('errors', $errors);
      $this->session->set_flashdata('input', $this->input->post());

      redirect('index.php/auth/login');
    } else {
      //Menangkap inputan dari form
      $username = htmlspecialchars($this->input->post('username'));
      $password = htmlspecialchars($this->input->post('password'));

      $cek = $this->auth_model->cek_login($username);
      //Pengecekan username
      if ($cek == FALSE) {
        $this->session->set_flashdata('errors', "Maaf Username tidak terdaftar");
        redirect('login');
      } else {
        //Pengecekan password
        if (password_verify($password, $cek->password)) {
          //Buatkan session
          $this->session->set_userdata('id', $cek->id);
          $this->session->set_userdata('username', $cek->username);

          //Dialihkan ke dashboard
          redirect('admin');
        } else {
          echo "Username dan Password salah";
        }
      }
    }
  }
  //======Batas Login======
  public function logout()
  {
    //Body function logout...
    $this->session->session_destroy();
    echo "Logout berhasil";
  }
}