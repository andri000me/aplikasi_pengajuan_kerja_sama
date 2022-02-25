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

}