<?php
class M_masa_berlaku extends CI_Model
{
    function get_masa_berlaku(){
        $hasil=$this->db->query("SELECT * FROM masa_berlaku");
        return $hasil->result_array();
    }

    public function tambah_masa_berlaku($masa_berlaku){
        $this->db->trans_start();
        $this->db->query("INSERT INTO masa_berlaku(masa_berlaku) 
        VALUES ('$masa_berlaku')");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function update_masa_berlaku($masa_berlaku, $id_masa_berlaku){
        $hsl = $this->db->query("UPDATE masa_berlaku SET masa_berlaku='$masa_berlaku' WHERE id_masa_berlaku='$id_masa_berlaku'");
         return $hsl;
     }
}