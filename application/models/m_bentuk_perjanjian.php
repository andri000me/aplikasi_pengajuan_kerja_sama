<?php
class M_bentuk_perjanjian extends CI_Model
{
    function get_bentuk_perjanjian(){
        $hasil=$this->db->query("SELECT * FROM bentuk_perjanjian");
        return $hasil->result_array();
    }

    public function tambah_bentuk_perjanjian($bentuk_perjanjian){
        $this->db->trans_start();
        $this->db->query("INSERT INTO bentuk_perjanjian(bentuk_perjanjian) 
        VALUES ('$bentuk_perjanjian')");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function update_bentuk_perjanjian($bentuk_perjanjian, $id_bentuk_perjanjian){
        $hsl = $this->db->query("UPDATE bentuk_perjanjian SET bentuk_perjanjian='$bentuk_perjanjian' WHERE id_bentuk_perjanjian='$id_bentuk_perjanjian'");
         return $hsl;
     }

}