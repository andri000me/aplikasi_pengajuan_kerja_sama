<?php
class M_status_kerja_sama extends CI_Model
{
    function get_status_kerja_sama(){
        $hasil=$this->db->query("SELECT * FROM status_kerja_sama");
        return $hasil->result_array();
    }

    public function tambah_status_kerja_sama($status_kerja_sama){
        $this->db->trans_start();
        $this->db->query("INSERT INTO status_kerja_sama(status_kerja_sama) 
        VALUES ('$status_kerja_sama')");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function update_status_kerja_sama($status_kerja_sama, $id_status_kerja_sama){
        $hsl = $this->db->query("UPDATE status_kerja_sama SET status_kerja_sama='$status_kerja_sama' WHERE id_status_kerja_sama='$id_status_kerja_sama'");
         return $hsl;
     }
}