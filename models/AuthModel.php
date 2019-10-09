<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model {
    
    public function cekAdmin($username){
        $akun = $this->db->get_where('user', ['username' => $username])->row_array();
        return $akun;
    }
    
    public function cekPetani($username){        
        $akun = $this->db->get_where('petani', ['ptnUsername' => $username])->row_array();
        return $akun;    
    }

    public function cekMitra($username){
        $akun = $this->db->get_where('mitra', ['mtrUsername' => $username])->row_array();
        return $akun;
    }

    public function cekInvestor($username){
        $akun = $this->db->get_where('investor', ['invUsername' => $username])->row_array();
        return $akun;
    }

    function register($namaTabel, $data){
        $hasil = $this->db->insert($namaTabel, $data);
		return $hasil;
    }
}