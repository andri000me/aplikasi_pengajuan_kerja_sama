<?php
class M_kategori_kerja_sama extends CI_Model
{
    function get_kategori_kerja_sama(){
        $hasil=$this->db->query("SELECT * FROM kategori_kerja_sama");
        return $hasil->result_array();
    }

}