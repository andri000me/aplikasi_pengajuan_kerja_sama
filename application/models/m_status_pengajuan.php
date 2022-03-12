<?php
class M_status_pengajuan extends CI_Model
{
    function get_status_pengajuan(){
        $hasil=$this->db->query("SELECT * FROM status_pengajuan");
        return $hasil->result_array();
    }

    public function tambah_status_pengajuan($status_pengajuan){
        $this->db->trans_start();
        $this->db->query("INSERT INTO status_pengajuan(status_pengajuan) 
        VALUES ('$status_pengajuan')");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function update_status_pengajuan($status_pengajuan, $id_status_pengajuan){
        $hsl = $this->db->query("UPDATE status_pengajuan SET status_pengajuan='$status_pengajuan' WHERE id_status_pengajuan='$id_status_pengajuan'");
         return $hsl;
     }
}