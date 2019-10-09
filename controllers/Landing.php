<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller{

    function __construct(){
        parent::__construct();
        if($this->session->userdata('masuk') != TRUE){
            redirect(base_url());
        }
    }

    function admin(){
        if($this->session->userdata('akses')=='admin'){
            redirect('Admin');
        }else{
            echo "<script>
                    alert('Anda tidak berhak mengakses halaman ini!');
                  </script>";
        }
    }

    function petani(){
        if($this->session->userdata('akses')=='petani' || $this->session->userdata('akses')=='admin'){
            redirect('Welcome/petani');
        }else{
            echo "<script>
                    alert('Anda tidak berhak mengakses halaman ini!');
                  </script>";
        }
    }

    function mitra(){
        if($this->session->userdata('akses')=='mitra' || $this->session->userdata('akses')=='admin'){
            redirect('Welcome/mitra');
        }else{
            echo "<script>
                    alert('Anda tidak berhak mengakses halaman ini!');
                  </script>";
        }
    }

    function investor(){
        if($this->session->userdata('akses')=='investor' || $this->session->userdata('admin')=='admin'){
            redirect('Welcome/investor');
        }else{
            echo "<script>
                    alert('Anda tidak berhak mengakses halaman ini!');
                  </script>";
        }
    }

}