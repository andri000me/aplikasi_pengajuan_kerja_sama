<?php
class M_kategori_kerja_sama extends CI_Model
{
    function get_kategori_kerja_sama(){
        $hasil=$this->db->query("SELECT * FROM kategori_kerja_sama");
        return $hasil->result_array();
    }

    public function tambah_kategori_kerja_sama($kategori_kerja_sama){
        $this->db->trans_start();
        $this->db->query("INSERT INTO kategori_kerja_sama(nama_kategori_kerja_sama) 
        VALUES ('$kategori_kerja_sama')");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function update_kategori_kerja_sama($kategori_kerja_sama, $id_kategori_kerja_sama){
        $hsl = $this->db->query("UPDATE kategori_kerja_sama SET nama_kategori_kerja_sama='$kategori_kerja_sama' WHERE id_kategori_kerja_sama='$id_kategori_kerja_sama'");
         return $hsl;
     }

}