<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autentifikasi extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('AuthModel');
    }

    function login()
	{
		$this->load->view('autentifikasi/header');
		$this->load->view('autentifikasi/login/login');
		$this->load->view('autentifikasi/footer');
	}

	function registrasi()
	{
		$this->load->view('autentifikasi/header');
		$this->load->view('autentifikasi/registrasi/daftar');
		$this->load->view('autentifikasi/footer');
    }
    
    function cekLogin(){
            $username = htmlspecialchars($this->input->post('username'));
            $password = htmlspecialchars($this->input->post('password'));

            $cek = $this->AuthModel->cekAdmin($username);
            //var_dump($cek);die;
                if(password_verify($password, $cek['ptnPassword'])){
                    $data = [
                        'username' => $cek['ptnUsername'],
                        'role' => $cek['role']
                    ];
                    $this->session->set_userdata($data);
                    if($cek['role'] == 'petani'){
                        redirect('Petani');
                    }
                }               
            }
                               
    
            
                
               /* $data = [
                    'username' => $cek['mtrUsername'],
                    'role' => $cek['role']
                ];
                $this->session->set_userdata($data);
                if($cek['role'] == 'mitra'){
                    redirect('Produk');
                }else if($cek['role'] == 'petani'){
                    redirect('Welcome/mitra');
                }else if($cek['role'] == 'investor'){
                    redirect('Welcome/investor');
                }else if($cek['role'] == 'administrator'){
                    redirect('Admin');
                }else{
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password anda salah!</div>');
                    redirect('Autentifikasi/login');
                }
            }*/
    

    function daftar(){
        $nama = htmlspecialchars($this->input->post('nama', TRUE));    
        $noKTP = htmlspecialchars($this->input->post('ktp', TRUE));
        $username = htmlspecialchars($this->input->post('username', TRUE));
        $password = password_hash($this->input->post('password1', TRUE), PASSWORD_DEFAULT);
        $alamat = htmlspecialchars($this->input->post('alamat', TRUE));
        $noTelp = htmlspecialchars($this->input->post('telepon', TRUE));
        $role = $_POST['level'];
        $noRek = htmlspecialchars($this->input->post('norek', TRUE));
        $JK = $_POST['gender'];
        
            if($role == 'petani'){
                $data = [
                    'ptnUsername' => $username,
                    'ptnPassword' => $password,
                    'ptnNama' => $nama,
                    'ptnAlamat' => $alamat,
                    'ptnTelp' => $noTelp,
                    'ptnJK' => $JK,
                    'ptnKTP' => $noKTP,
                    'ptnNorek' => $noRek,
                    'role' => $role 
                ];
                

                $cek = $this->AuthModel->cekPetani($data['ptnUsername'], $data['ptnPassword']);

                if($cek){
                    echo 'akun tersebut sudah terdaftar silahkan login!';
                }else{
                    $hasil = $this->AuthModel->register($role, $data);
                    if($hasil > 0){
                        redirect('Autentifikasi/login');
                    }else{
                        redirect('Autentifikasi/registrasi');
                    }
                }
            }
            
            if($role == 'mitra'){
                $data = [
                    'mtrUsername' => $username,
                    'mtrPassword' => $password,
                    'mtrNama' => $nama,
                    'mtrAlamat' => $alamat,
                    'mtrTelp' => $noTelp,
                    'mtrJK' => $JK,
                    'mtrKTP' => $noKTP,
                    'mtrNorek' => $noRek,
                    'role' => $role 
                ];
                

                $cek = $this->AuthModel->cekMitra($data['mtrUsername'], $data['mtrPassword']);

                if($cek){
                    echo 'akun tersebut sudah terdaftar silahkan login!';
                }else{
                    $hasil = $this->AuthModel->register($role, $data);
                    if($hasil > 0){
                        redirect('Autentifikasi/login');
                    }else{
                        redirect('Autentifikasi/registrasi');
                    }
                }
            }

            if($role == 'investor'){
                $data = [
                    'invUsername' => $username,
                    'invPassword' => $password,
                    'invNama' => $nama,
                    'invAlamat' => $alamat,
                    'invTelp' => $noTelp,
                    'invJK' => $JK,
                    'invKTP' => $noKTP,
                    'invNorek' => $noRek,
                    'role' => $role 
                ];
                

                $cek = $this->AuthModel->cekInvestor($data['invUsername'], $data['invPassword']);

                if($cek){
                    echo 'akun tersebut sudah terdaftar silahkan login!';
                }else{
                    $hasil = $this->AuthModel->register($role, $data);
                    if($hasil > 0){
                        redirect('Autentifikasi/login');
                    }else{
                        redirect('Autentifikasi/registrasi');
                    }
                }
            }

            if($role == 'investor'){
                $data = [
                    'invUsername' => $username,
                    'vnvPassword' => $password,
                    'invNama' => $nama,
                    'invrAlamat' => $alamat,
                    'invTelp' => $noTelp,
                    'invJK' => $JK,
                    'invKTP' => $noKTP,
                    'invNorek' => $noRek,
                    'role' => $role 
                ];
                

                $cek = $this->AuthModel->cekInvestor($data['invUsername'], $data['invPassword']);

                if($cek){
                    echo 'akun tersebut sudah terdaftar silahkan login!';
                }else{
                    $hasil = $this->AuthModel->register('mitra', $data);
                    if($hasil > 0){
                        redirect('Autentifikasi/login');
                    }else{
                        redirect('Autentifikasi/registrasi');
                    }
                }
            }
            

           /*
            $data = [
                'id_user' => uniqid(),
                'nama' => htmlspecialchars($this->input->post('nama', TRUE)),
                'alamat' => htmlspecialchars($this->input->post('alamat', TRUE)),
                'telepon' => htmlspecialchars($this->input->post('telepon', TRUE)),
                'username' => strtolower(stripslashes($this->input->post('username', TRUE))),
                'password' => password_hash($this->input->post('password1', TRUE), PASSWORD_DEFAULT),
                'role' => $role,
                'created_on' => time()
            ];
            
            $cek = $this->AuthModel->cekAkun('user', $data['username']);

            if($cek){
                echo 'akun tersebut sudah terdaftar silahkan login!';
            }else{
                $hasil = $this->AuthModel->register('user', $data);
                if($hasil > 0){
                    redirect('Autentifikasi/login');
                }else{
                    redirect('Autentifikasi/registrasi');
                }
            }*/
    }

    public function logout(){
        $this->session->sess_destroy();
        $url = base_url('Autentifikasi/login');
        redirect($url);
    }

    public function tolakAkses(){
        $this->load->view('Autentifikasi/tolak_akses');
    }
}