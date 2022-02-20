<?php
class M_kerja_sama_eksternal extends CI_Model
{

    public function tambah_kerja_sama_eksternal($no_usulan, $keterangan, $id_lembaga_mitra, $id_pengusul, $id_status_kerja_sama, $file_kerja_sama_eksternal){
        $this->db->trans_start();
        $this->db->query("INSERT INTO kerja_sama_eksternal(no_usulan, keterangan, id_lembaga_mitra, id_pengusul, id_status_kerja_sama, file_kerja_sama_eksternal) 
        VALUES ('$no_usulan', '$keterangan','$id_lembaga_mitra','$id_pengusul','$id_status_kerja_sama','$file_kerja_sama_eksternal')");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    function get_kerja_sama_eksternal(){
        $hasil=$this->db->query("SELECT * FROM kerja_sama_eksternal JOIN user ON kerja_sama_eksternal.id_lembaga_mitra = user.id");
        return $hasil;
    }
    function get_kerja_sama_eksternal_pengusul(){
        $hasil=$this->db->query("SELECT nama_mitra as nama_pengusul FROM kerja_sama_eksternal JOIN user ON kerja_sama_eksternal.id_pengusul = user.id");
        return $hasil;
    }

}