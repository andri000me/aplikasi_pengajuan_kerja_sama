<?php
class M_negara_asal_pengajuan extends CI_Model
{
    public function get_negara_asal_pengajuan(){
        $hasil=$this->db->query("SELECT * FROM negara_asal_pengajuan");
        return $hasil->result_array();
    }

    public function tambah_negara_pengajuan($negara_pengajuan){
        $this->db->trans_start();
        $this->db->query("INSERT INTO negara_asal_pengajuan(negara_pengajuan) 
        VALUES ('$negara_pengajuan')");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function update_negara_pengajuan($negara_pengajuan, $id_negara_pengajuan){
        $hsl = $this->db->query("UPDATE negara_asal_pengajuan SET negara_pengajuan='$negara_pengajuan' WHERE id_negara_pengajuan='$id_negara_pengajuan'");
         return $hsl;
     }

}