<?php
class M_kerja_sama_eksternal extends CI_Model
{

    public function tambah_kerja_sama_eksternal($no_usulan, $keterangan, $id_lembaga_mitra, $id_pengusul, $id_status_kerja_sama, $file_kerja_sama_eksternal, $id_kategori_kerja_sama){
        $this->db->trans_start();
        $this->db->query("INSERT INTO kerja_sama_eksternal(no_usulan, keterangan, id_lembaga_mitra, id_pengusul, id_status_kerja_sama, file_kerja_sama_eksternal, id_kategori_kerja_sama) 
        VALUES ('$no_usulan', '$keterangan','$id_lembaga_mitra','$id_pengusul','$id_status_kerja_sama','$file_kerja_sama_eksternal', '$id_kategori_kerja_sama')");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    function get_kerja_sama_eksternal(){
        $hasil=$this->db->query("SELECT * FROM kerja_sama_eksternal 
        JOIN user ON kerja_sama_eksternal.id_lembaga_mitra = user.id
        JOIN kategori_kerja_sama ON kerja_sama_eksternal.id_kategori_kerja_sama = kategori_kerja_sama.id_kategori_kerja_sama
        JOIN status_kerja_sama ON kerja_sama_eksternal.id_status_kerja_sama = status_kerja_sama.id_status_kerja_sama");
        return $hasil;
    }
    function get_kerja_sama_eksternal_pengusul(){
        $hasil=$this->db->query("SELECT nama_mitra as nama_pengusul FROM kerja_sama_eksternal 
        JOIN user ON kerja_sama_eksternal.id_pengusul = user.id");
        return $hasil->result_array();
    }

    function update_kerja_sama_eksternal($id, $no_usulan, $keterangan, $id_lembaga_mitra, $id_pengusul, $id_status_kerja_sama, $file_kerja_sama_eksternal){
        $hsl = $this->db->query("UPDATE kerja_sama_eksternal SET no_usulan='$no_usulan', keterangan='$keterangan' , id_lembaga_mitra='$id_lembaga_mitra', id_pengusul='$id_pengusul', id_status_kerja_sama='$id_status_kerja_sama' , file_kerja_sama_eksternal='$file_kerja_sama_eksternal' WHERE id_kerja_sama_eksternal='$id'");
         return $hsl;
     }

     function hapus_kerja_sama_eksternal($id_kerja_sama_eksternal){
        $this->db->trans_start();
        $this->db->query("DELETE FROM kerja_sama_eksternal WHERE id_kerja_sama_eksternal='$id_kerja_sama_eksternal'");
         
        $this->db->trans_complete();
       if($this->db->trans_status()==true)
       return true;
       else
       return false;
    }
}