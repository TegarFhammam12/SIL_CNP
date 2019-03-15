<?php
class m_login extends CI_Model{
    function auth($user,$pass){

      $this->db->select('dt_nip,dt_nama,dt_email,dt_no_telp,dt_username,dt_password,level');
      $this->db->from('tb_admin');
      $this->db->where('dt_username',$user);
      $this->db->where('dt_password',$pass);
      $this->db->limit(1);

      $query=$this->db->get();
      if($query->num_rows()==1){
        return $query->result();
      }else{
        return false;
      }
    }


}
