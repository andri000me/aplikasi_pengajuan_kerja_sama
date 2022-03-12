<?php
class M_negara_asal_pengajuan extends CI_Model
{
    public function get_negara_asal_pengajuan(){
        $hasil=$this->db->query("SELECT * FROM negara_asal_pengajuan");
        return $hasil->result_array();
    }

    public function tambah_negara_pengajuan(){
        $this->db->trans_start();
        $this->db->query("INSERT INTO implementasi_kerja_sama(masa_berlaku, id_lembaga_mitra, keterangan, id_bentuk_perjanjian, file_implementasi_kerja_sama, id_kategori_kerja_sama) 
        VALUES ('$masa_berlaku', '$id_lembaga_mitra','$keterangan','$id_bentuk_perjanjian','$file_implementasi_kerja_sama','$id_kategori_kerja_sama')");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

}