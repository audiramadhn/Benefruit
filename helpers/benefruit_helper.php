<?php

    function Akses(){
        $ini = get_instance();
        if(!$ini->session->userdata('Username')){
            redirect('Autentifikasi/login');
        }else{
            $role = $ini->session->userdata('role');
            $menu = $ini->uri->segment(1);

            $cekMenu = $ini->db->get_where('menu', ['menu' => $menu])->row_array();

            $id_menu = $cekMenu['id'];

            $cekAkses = $ini->db->get_where('akses', ['role' => $role, 'menu' => $id_menu]);

            if($cekAkses->num_rows() < 1){
                redirect('Autentifikasi/tolakAkses');
            }
        }
    }
?>