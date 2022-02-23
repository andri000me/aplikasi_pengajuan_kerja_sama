<?php
class M_implementasi_kerja_sama extends CI_Model
{
    public function tambah_implementasi_kerja_sama($masa_berlaku, $id_lembaga_mitra,  $keterangan, $id_bentuk_perjanjian, $file_implementasi_kerja_sama){
        $this->db->trans_start();
        $this->db->query("INSERT INTO implementasi_kerja_sama(masa_berlaku, id_lembaga_mitra, keterangan, id_bentuk_perjanjian, file_implementasi_kerja_sama) 
        VALUES ('$masa_berlaku', '$id_lembaga_mitra','$keterangan','$id_bentuk_perjanjian','$file_implementasi_kerja_sama')");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    function get_implementasi_kerja_sama(){
        $hasil=$this->db->query("SELECT * FROM implementasi_kerja_sama 
        JOIN user ON implementasi_kerja_sama.id_lembaga_mitra = user.id");
        return $hasil;
    }
}