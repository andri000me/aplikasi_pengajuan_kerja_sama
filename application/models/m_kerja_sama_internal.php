<?php
class M_kerja_sama_internal extends CI_Model
{

    public function tambah_kerja_sama_internal($no_usulan, $keterangan, $id_lembaga_mitra, $id_pengusul, $id_status_kerja_sama, $file_kerja_sama_internal, $id_kategori_kerja_sama ){
        $this->db->trans_start();
        $this->db->query("INSERT INTO kerja_sama_internal(no_usulan, keterangan, id_lembaga_mitra, id_pengusul, id_status_kerja_sama, file_kerja_sama_internal, id_kategori_kerja_sama ) 
        VALUES ('$no_usulan', '$keterangan','$id_lembaga_mitra','$id_pengusul','$id_status_kerja_sama','$file_kerja_sama_internal', '$id_kategori_kerja_sama')");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    function get_kerja_sama_internal(){
        $hasil=$this->db->query("SELECT * FROM kerja_sama_internal JOIN user ON kerja_sama_internal.id_lembaga_mitra = user.id 
        JOIN status_kerja_sama ON kerja_sama_internal.id_status_kerja_sama = status_kerja_sama.id_status_kerja_sama
        JOIN kategori_kerja_sama ON kerja_sama_internal.id_kategori_kerja_sama = kategori_kerja_sama.id_kategori_kerja_sama");
        return $hasil;
    }
    function get_kerja_sama_internal_pengusul(){
        $hasil=$this->db->query("SELECT nama_mitra as nama_pengusul FROM kerja_sama_internal JOIN user ON kerja_sama_internal.id_pengusul = user.id");
        return $hasil;
    }

    function get_kerja_sama_internal_by_kategori($id_kategori_kerja_sama){
        $hasil=$this->db->query("SELECT * FROM kerja_sama_internal 
        JOIN user ON kerja_sama_internal.id_lembaga_mitra = user.id
        JOIN kategori_kerja_sama ON kerja_sama_internal.id_kategori_kerja_sama = kategori_kerja_sama.id_kategori_kerja_sama
        JOIN status_kerja_sama ON kerja_sama_internal.id_status_kerja_sama = status_kerja_sama.id_status_kerja_sama WHERE kerja_sama_internal.id_kategori_kerja_sama='$id_kategori_kerja_sama'");
        return $hasil;
    }
    function get_kerja_sama_internal_pengusul_by_kategori($id_kategori_kerja_sama){
        $hasil=$this->db->query("SELECT nama_mitra as nama_pengusul FROM kerja_sama_internal 
        JOIN user ON kerja_sama_internal.id_pengusul = user.id WHERE kerja_sama_internal.id_kategori_kerja_sama='$id_kategori_kerja_sama'");
        return $hasil;
    }

    function update_kerja_sama_internal($id, $no_usulan, $keterangan, $id_lembaga_mitra, $id_pengusul, $id_status_kerja_sama, $file_kerja_sama_internal, $id_kategori_kerja_sama){
        $hsl = $this->db->query("UPDATE kerja_sama_internal SET no_usulan='$no_usulan', keterangan='$keterangan' , id_lembaga_mitra='$id_lembaga_mitra', id_pengusul='$id_pengusul', id_status_kerja_sama='$id_status_kerja_sama' , file_kerja_sama_internal='$file_kerja_sama_internal', id_kategori_kerja_sama='$id_kategori_kerja_sama' WHERE id_kerja_sama_internal='$id'");
         return $hsl;
     }

    function hapus_kerja_sama_internal($id_kerja_sama_internal){
        $this->db->trans_start();
        $this->db->query("DELETE FROM kerja_sama_internal WHERE id_kerja_sama_internal='$id_kerja_sama_internal'");
         
        $this->db->trans_complete();
       if($this->db->trans_status()==true)
       return true;
       else
       return false;
    }
}