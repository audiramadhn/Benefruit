<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller{

    public function index(){
        $this->load->view('beranda/home/beranda');
    }

    public function about(){
        $this->load->view('beranda/about/about');
    }

    public function layanan(){
        $this->load->view('beranda/layanan/layanan');
    }

    public function galeri(){

    }

    public function kontak(){
        $this->load->view('beranda/kontak/kontak');
    }
}