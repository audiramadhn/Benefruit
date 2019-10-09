<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petani extends CI_Controller{

    public function __construct(){
        parent::__construct();
        
        $this->load->model('CrudModel');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['buah'] = $this->CrudModel->getData();
        $this->load->view('petani/buah', $data);
    }

    public function tambahBaru(){
        $this->form_validation->set_rules($this->CrudModel->rules());

        if($this->form_validation->run()){
            $this->CrudModel->simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan!');
        }

        $this->load->view('produk/form_tambah');
    }

    public function ubah($id_produk = null){
        if(!isset($id_produk)) redirect('produk');
        $this->form_validation->set_rules($this->CrudModel->rules());

        if($this->form_validation->run()){
            $this->CrudModel->ubah();
            $this->session->set_flashdata('success', 'Berhasil diubah!');
        }

            $data['produk'] = $this->CrudModel->getById($id_produk);
            if(!$data['produk']) show_404();
            $this->load->view('produk/form_ubah', $data);
    }

    public function hapus($id_produk = null){
        if(!isset($id_produk)) show_404();

        if($this->CrudModel->hapus($id_produk)){
            redirect(site_url('produk'));
        }
    }

    public function pesanan(){
        $data['produk'] = $this->CrudModel->getData();
        $this->load->view('produk/pesanan', $data);
    }

    public function riwayat_pesanan(){
        $data['produk'] = $this->CrudModel->getData();
        $this->load->view('produk/riwayat_pesanan', $data);
    }
    
    public function mitra(){
        $data['produk'] = $this->CrudModel->getData();
        $this->load->view('mitra/daftar_buah', $data);
    }

}