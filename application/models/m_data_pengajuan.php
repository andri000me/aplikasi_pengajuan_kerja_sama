<?php 

class M_data_pengajuan extends CI_Model
{
    public function tambah_data_pengajuan($no_pengajuan, $keterangan, $id_bentuk_perjanjian, $id_jenis_pengajuan, $file_data_pengajuan, $id_negara_asal_pengajuan, $id_status_pengajuan, $id_kategori_kerjasama, $id_user_penerima, $id_user_pengirim ){
        $this->db->trans_start();
        $this->db->query("INSERT INTO data_pengajuan(no_pengajuan, keterangan, id_bentuk_perjanjian, id_jenis_pengajuan, file_data_pengajuan, id_negara_asal_pengajuan, id_status_pengajuan, id_kategori_kerjasama, id_user_penerima, id_user_pengirim) 
        VALUES ('$no_pengajuan', '$keterangan','$id_bentuk_perjanjian','$id_jenis_pengajuan','$file_data_pengajuan','$id_negara_asal_pengajuan','$id_status_pengajuan','$id_kategori_kerjasama','$id_user_penerima','$id_user_pengirim')");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    function get_data_pengajuan($id){
        $hasil=$this->db->query("SELECT * FROM data_pengajuan 
        JOIN bentuk_perjanjian ON data_pengajuan.id_bentuk_perjanjian = bentuk_perjanjian.id_bentuk_perjanjian
        JOIN jenis_pengajuan ON data_pengajuan.id_jenis_pengajuan = jenis_pengajuan.id_jenis_pengajuan
        JOIN negara_asal_pengajuan ON data_pengajuan.id_negara_asal_pengajuan = negara_asal_pengajuan.id_negara_pengajuan
        JOIN status_pengajuan ON data_pengajuan.id_status_pengajuan = status_pengajuan.id_status_pengajuan
        JOIN kategori_kerja_sama ON data_pengajuan.id_kategori_kerjasama = kategori_kerja_sama.id_kategori_kerja_sama
        JOIN user ON data_pengajuan.id_user_pengirim = user.id WHERE id_user_penerima='$id'");
        return $hasil;
    }

    function jumlah_data_pengajuan($id){
        $hsl = $this->db->query("SELECT COUNT(id_data_pengajuan) as total_data_pengajuan FROM data_pengajuan WHERE id_user_penerima='$id' ");
         return $hsl;
    }

    function jumlah_data_pengajuan_all(){
        $hsl = $this->db->query("SELECT COUNT(id_data_pengajuan) as total_data_pengajuan FROM data_pengajuan");
         return $hsl;
    }

    function update_status_data_pengajuan($id_status_pengajuan, $id_data_pengajuan){
        $hsl = $this->db->query("UPDATE data_pengajuan SET id_status_pengajuan='$id_status_pengajuan'  WHERE id_data_pengajuan='$id_data_pengajuan'");
         return $hsl;
     }

     function hapus_data_pengajuan($id_data_pengajuan){
        $this->db->trans_start();
        $this->db->query("DELETE FROM data_pengajuan WHERE id_data_pengajuan='$id_data_pengajuan'");
         
        $this->db->trans_complete();
       if($this->db->trans_status()==true)
       return true;
       else
       return false;
    }
}