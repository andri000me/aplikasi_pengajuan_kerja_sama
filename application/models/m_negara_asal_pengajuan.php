<?php
class M_negara_asal_pengajuan extends CI_Model
{
    function get_negara_asal_pengajuan(){
        $hasil=$this->db->query("SELECT * FROM negara_asal_pengajuan");
        return $hasil->result_array();
    }

}