<?php
class M_bentuk_perjanjian extends CI_Model
{
    function get_bentuk_perjanjian(){
        $hasil=$this->db->query("SELECT * FROM bentuk_perjanjian");
        return $hasil->result_array();
    }

}