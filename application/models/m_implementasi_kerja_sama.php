<?php
class M_implementasi_kerja_sama extends CI_Model
{

    function get_implementasi_kerja_sama(){
        $hasil=$this->db->query("SELECT * FROM implementasi_kerja_sama 
        JOIN user ON implementasi_kerja_sama.id_lembaga_mitra = user.id");
        return $hasil;
    }
}