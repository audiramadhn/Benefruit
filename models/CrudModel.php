<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CrudModel extends CI_Model{

    private $tabel = 'produk';
    
    public $id_produk;
    public $nama_produk;
    public $harga;
    public $stok;
    public $jenis;
    public $gambar = 'polos.jpg';
    public $deskripsi;
    public $docProduk = 'prototype.docx';

    public function rules(){
        return[
            ['field' => 'namaProduk',
            'label' => 'namaProduk',
            'rules' => 'required'],

            ['field' => 'jenisProduk',
            'label' => 'jenisProduk',
            'rules' => 'required'],

            ['field' => 'hargaProduk',
            'label' => 'hargaProduk', 
            'rules' => 'numeric'],

            ['field' => 'stokProduk',
            'label' => 'stokProduk', 
            'rules' => 'numeric'],

            ['field' => 'deskProduk',
            'label' => 'deskProduk',
            'rules' => 'required']
        ];
    }

    public function getData(){
        $data = $this->db->get($this->tabel)->result();
        return $data;
    }

    public function getById($id_produk){
        return $this->db->get_where($this->tabel, ['idProduk' => $id_produk])->row();        
    }

    public function simpan(){
        $data = $this->input->post();
        $this->id_produk = uniqid();
        $this->nama_produk = $data['namaProduk'];
        $this->harga = $data['hargaProduk'];
        $this->stok = $data['stokProduk'];
        $this->jenis = $data['jenisProduk'];
        $this->gambar = $this->uploadGambar();
        $this->deskripsi = $data['deskProduk'];
        $this->docProduk = $this->uploadFile();

        $this->db->insert($this->tabel, $this);
    }

    public function ubah(){
        $data = $this->input->post();
        $this->id_produk = $data['idProduk'];
        $this->nama_produk = $data['namaProduk'];
        $this->harga = $data['hargaProduk'];
        $this->stok = $data['stokProduk'];
        $this->jenis = $data['jenisProduk'];

        if(!empty($_FILES["gambar"]["name"])){
            $this->gambar = $this->uploadGambar();
        }else{
            $this->gambar = $data['gambar_lawas'];
        }
        $this->deskripsi = $data['deskProduk'];
        if(!empty($_FILES["docProduk"]["name"])){
            $this->gambar = $this->uploadGambar();
        }else{
            $this->gambar = $data['dokumen_lawas'];
        }
        $this->db->update($this->tabel, $this, array('idProduk' => $data['idProduk']));
    }

    public function hapus($id_produk){
        $this->hapusGambar($id_produk);
        $this->hapusDok($id_produk);
        return $this->db->delete($this->tabel, array('idProduk' => $id_produk));
    }

    private function uploadGambar(){
        $setting['upload_path'] = './gambar/produk/';
        $setting['allowed_types'] = 'gif|GIF|jpg|JPG|jpeg|JPEG|png|PNG';
        $setting['file_name'] = $this->id_produk;
        $setting['overwrite'] = true;
        $setting['max_size'] = 2048;

        $this->load->library('upload', $setting);
        
        if($this->upload->do_upload('gambar')){
            return $this->upload->data("file_name");
        }

        print_r($this->upload->display_errors());
        //return "polos.jpg";
    }

    private function uploadFile(){
        $setting['upload_path'] = './dokumen/produk/';
        $setting['allowed_types'] = 'doc|docx|pdf';
        $setting['file_name'] = $this->id_produk;
        $setting['overwrite'] = true;
        $setting['max_size'] = 5120;

        $this->load->library('upload', $setting);
        
        if($this->upload->do_upload('docProduk')){
            return $this->upload->data("file_name");
        }

        print_r($this->upload->display_errors());
        //return "polos.jpg";
    }

    private function hapusGambar($id_produk){
        if($this->getById($id_produk)->docProduk != "polos.jpg"){
            $filename = explode(".", $this->getById($id_produk)->gambar)[0];
            return array_map('unlink', glob(FCPATH."gambar/produk/$filename.*"));
        }
    }

    private function hapusDok($id_produk){
        if($this->getById($id_produk)->docProduk != "prototype.docx"){
            $filename = explode(".", $this->getById($id_produk)->gambar)[0];
            return array_map('unlink', glob(FCPATH."dokumen/produk/$filename.*"));
        }
    }
}