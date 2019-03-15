<?php
class m_internet extends CI_Model{
  function fetch_data()
  {
    $query = $this->db->get("tb_internet");
    return $query->result();
  }
  function deleterecords($id)
  {
    $this->db->query("delete from tb_internet where dt_id='".$id."'");
  }
  public function search($key){
    $this->db->like('dt_nama', $key);
    $query = $this->db->get('tb_internet');
    return $query->result();
  }
}
