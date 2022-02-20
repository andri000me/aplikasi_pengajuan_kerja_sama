<?php
class M_user extends CI_Model
{
  
    function cek_user($username,$password){
        $hasil=$this->db->query("SELECT * FROM user WHERE username='$username' AND password='$password' ");
        return $hasil;
    }

   function pendaftaran_user($username, $no_hp, $email, $nama_mitra, $password, $id_role){
            $hasil = $this->db->query("INSERT INTO user(username,no_hp,email,nama_mitra,password,id_user_level) VALUES ('$username','$no_hp','$email','$nama_mitra','$password','$id_role')");
            return $hasil;
        }

   

}?>
