<?php
defined('BASEPATH') or exit('No direct script access allowed');
//Class yang mengatur alur proses login & register
class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    //Load kebutuhan library, model, helper dll disini
    $this->load->library('session');
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
      'trim|required|is_unique[users.email]|min_length[7]|max_length[66]|valid_email'
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
        'password' => $pass,
        'role'  => 'User'
      ];
      //parameter dari model register
      $insert = $this->auth_model->register("users", $data);
      $this->session->set_flashdata('success_register', 'Proses Pendaftaran User Berhasil');
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

      redirect('login');
    } else {
      //Menangkap inputan dari form
      $username = htmlspecialchars($this->input->post('username'));
      $password = htmlspecialchars($this->input->post('password'));

      $cek = $this->auth_model->cek_login($username);
      if ($cek == FALSE) {
        $this->session->set_flashdata('errors', "Maaf, Username atau Password salah");
        redirect('login');
      } else {
        //Pengecekan password
        if (password_verify($password, $cek->password)) {
          //Buatkan session
          $this->session->set_userdata('id', $cek->id);
          $this->session->set_userdata('username', $cek->username);
          $this->session->set_userdata('name', $cek->name);
          $this->session->set_userdata('role_id', $cek->role);
          switch ($cek->role) {
            case 'Admin':
              redirect('admin');
              break;
            case 'User':
              redirect('home');
              break;
            default:
              break;
          }
        } else {
          $this->session->set_flashdata('errors', "Maaf, Username atau Password salah");
          redirect('login');
        }
      }
    }
  }

  //======Batas Login======
  public function logout()
  {
    //Body function logout...
    $this->session->sess_destroy();
    redirect('home');
  }
  public function not_admin()
  {
    $this->load->view('admin/404_not_admin');
  }
  public function not_found()
  {
    $this->load->view('errors/404');
  }
  public function home()
  {
    $this->load->view('user/home');
  }
  public function profil()
  {
    $this->load->view('user/profil');
  }
  public function jasa()
  {
    $this->load->view('user/jasa');
  }
  public function galeri()
  {
    $this->load->view('user/galeri');
  }
  public function shopping_cart()
  {
    $this->load->view('kategori/shopping_cart');
  }
  public function manajemen_barang()
  {
    $this->load->view('admin/manajemen_barang');
  }
  public function form_request()
  {
    $this->load->view('user/form_request');
  }
}
