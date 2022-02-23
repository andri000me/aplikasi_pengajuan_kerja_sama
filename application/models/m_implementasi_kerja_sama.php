<?php
class M_implementasi_kerja_sama extends CI_Model
{
    public function tambah_implementasi_kerja_sama($masa_berlaku, $id_lembaga_mitra,  $keterangan, $id_bentuk_perjanjian, $file_implementasi_kerja_sama, $id_kategori_kerja_sama){
        $this->db->trans_start();
        $this->db->query("INSERT INTO implementasi_kerja_sama(masa_berlaku, id_lembaga_mitra, keterangan, id_bentuk_perjanjian, file_implementasi_kerja_sama, id_kategori_kerja_sama) 
        VALUES ('$masa_berlaku', '$id_lembaga_mitra','$keterangan','$id_bentuk_perjanjian','$file_implementasi_kerja_sama','$id_kategori_kerja_sama')");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    function get_implementasi_kerja_sama(){
        $hasil=$this->db->query("SELECT * FROM implementasi_kerja_sama 
        JOIN user ON implementasi_kerja_sama.id_lembaga_mitra = user.id
        JOIN bentuk_perjanjian ON implementasi_kerja_sama.id_bentuk_perjanjian = bentuk_perjanjian.id_bentuk_perjanjian");
        return $hasil;
    }

    function update_implementasi_kerja_sama($masa_berlaku, $id_lembaga_mitra,  $keterangan, $id_bentuk_perjanjian, $file_implementasi_kerja_sama, $id_kategori_kerja_sama, $id_implementasi_kerja_sama){
        $hsl = $this->db->query("UPDATE implementasi_kerja_sama SET masa_berlaku='$masa_berlaku',  id_lembaga_mitra='$id_lembaga_mitra',  keterangan='$keterangan',  id_bentuk_perjanjian='$id_bentuk_perjanjian',  file_implementasi_kerja_sama='$file_implementasi_kerja_sama',  id_kategori_kerja_sama='$id_kategori_kerja_sama'  WHERE id_implementasi_kerja_sama='$id_implementasi_kerja_sama'");
         return $hsl;
     }

    function hapus_implementasi_kerja_sama($id_implementasi_kerja_sama){
        $this->db->trans_start();
        $this->db->query("DELETE FROM implementasi_kerja_sama WHERE id_implementasi_kerja_sama='$id_implementasi_kerja_sama'");
         
        $this->db->trans_complete();
       if($this->db->trans_status()==true)
       return true;
       else
       return false;
    }
}