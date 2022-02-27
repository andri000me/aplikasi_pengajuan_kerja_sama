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

   function get_user(){
    $hasil=$this->db->query("SELECT * FROM user");
    return $hasil;
   }

   function get_user_by_id($id){
    $hasil=$this->db->query("SELECT * FROM user WHERE id='$id'");
    return $hasil;
   }

   function update_user($username, $password, $email, $no_hp, $alamat_mitra, $id){
    $hsl = $this->db->query("UPDATE user SET username='$username', password='$password' , email='$email', no_hp='$no_hp', alamat_mitra='$alamat_mitra' WHERE id='$id'");
     return $hsl;
 }

}?>
