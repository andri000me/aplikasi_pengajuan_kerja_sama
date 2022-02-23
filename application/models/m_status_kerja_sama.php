<?php
class M_status_kerja_sama extends CI_Model
{
    function get_status_kerja_sama(){
        $hasil=$this->db->query("SELECT * FROM status_kerja_sama");
        return $hasil->result_array();
    }

}