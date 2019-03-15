<?php
class m_telephony extends CI_Model{
  function deleterecords($id)
  {
    $this->db->query("delete from tb_telephony where dt_id='".$id."'");
  }
  function fetch_data(){
    $query = $this->db->get("tb_telephony");
    //$query = $  this->db->query("SELECT * FROM tb_telephony ORDER BY dt_id ASC");
    return $query->result();
  }

  public function search($key){
    $this->db->like('dt_nama', $key);
    $query = $this->db->get('tb_telephony');
    return $query->result();
  }

}
