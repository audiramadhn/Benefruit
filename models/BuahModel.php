<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CrudModel extends CI_Model{

    private $tabel = 'buah';
    
    public $id_buah;
    public $nama_buah;
    public $harga;
    public $stok;
    
    public $gambar = 'polos.jpg';
    public $deskripsi;
    

    public function rules(){
        return[
            ['field' => 'namaBuah',
            'label' => 'namaBuah',
            'rules' => 'required'],

            ['field' => 'stokBuah',
            'label' => 'stokBuah', 
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
        return $this->db->get_where($this->tabel, ['idBuah' => $id_produk])->row();        
    }

    public function simpan(){
        $data = $this->input->post();
        $this->id_produk = uniqid();
        $this->nama_produk = $data['namaBuah'];
        $this->harga = $data['hargaBuah'];
        $this->stok = $data['stokBuah'];
        $this->gambar = $this->uploadGambar();
        $this->deskripsi = $data['deskBuah'];

        $this->db->insert($this->tabel, $this);
    }

    public function ubah(){
        $data = $this->input->post();
        $this->id_produk = $data['idBuah'];
        $this->nama_produk = $data['namaBuah'];
        $this->harga = $data['hargaBuah'];
        $this->stok = $data['stokProduk'];

        if(!empty($_FILES["gambar"]["name"])){
            $this->gambar = $this->uploadGambar();
        }else{
            $this->gambar = $data['gambar_lawas'];
        }
        $this->deskripsi = $data['deskProduk'];
        
        $this->db->update($this->tabel, $this, array('idProduk' => $data['idProduk']));
    }

    public function hapus($id_produk){
        $this->hapusGambar($id_produk);
        return $this->db->delete($this->tabel, array('idProduk' => $id_produk));
    }

    private function uploadGambar(){
        $setting['upload_path'] = './gambar/buah/';
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
            return array_map('unlink', glob(FCPATH."gambar/buah/$filename.*"));
        }
    }

    
}