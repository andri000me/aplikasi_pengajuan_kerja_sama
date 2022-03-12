<?php
class M_jenis_pengajuan extends CI_Model
{
    function get_jenis_pengajuan(){
        $hasil=$this->db->query("SELECT * FROM jenis_pengajuan");
        return $hasil->result_array();
    }

    public function tambah_jenis_pengajuan($jenis_pengajuan){
        $this->db->trans_start();
        $this->db->query("INSERT INTO jenis_pengajuan(jenis_pengajuan) 
        VALUES ('$jenis_pengajuan')");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function update_jenis_pengajuan($jenis_pengajuan, $id_jenis_pengajuan){
        $hsl = $this->db->query("UPDATE jenis_pengajuan SET jenis_pengajuan='$jenis_pengajuan' WHERE id_jenis_pengajuan='$id_jenis_pengajuan'");
         return $hsl;
     }
}