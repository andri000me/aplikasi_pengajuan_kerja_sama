<?php
class M_jenis_pengajuan extends CI_Model
{
    function get_jenis_pengajuan(){
        $hasil=$this->db->query("SELECT * FROM jenis_pengajuan");
        return $hasil->result_array();
    }

}