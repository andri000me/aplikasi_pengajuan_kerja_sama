<?php
class M_kerja_sama_internal extends CI_Model
{

    public function tambah_kerja_sama_internal($no_usulan, $keterangan, $id_lembaga_mitra, $id_pengusul, $id_status_kerja_sama, $file_kerja_sama_internal){
        $this->db->trans_start();
        $this->db->query("INSERT INTO kerja_sama_internal(no_usulan, keterangan, id_lembaga_mitra, id_pengusul, id_status_kerja_sama, file_kerja_sama_internal) 
        VALUES ('$no_usulan', '$keterangan','$id_lembaga_mitra','$id_pengusul','$id_status_kerja_sama','$file_kerja_sama_internal')");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    function get_kerja_sama_internal(){
        $hasil=$this->db->query("SELECT * FROM kerja_sama_internal JOIN user ON kerja_sama_internal.id_lembaga_mitra = user.id");
        return $hasil;
    }
    function get_kerja_sama_internal_pengusul(){
        $hasil=$this->db->query("SELECT nama_mitra as nama_pengusul FROM kerja_sama_internal JOIN user ON kerja_sama_internal.id_pengusul = user.id");
        return $hasil;
    }

}