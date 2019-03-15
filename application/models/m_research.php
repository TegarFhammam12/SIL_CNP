<?php
class m_research extends CI_Model{
  function fetch_data()
  {
    $query = $this->db->get("tb_research");
    return $query->result();
  }
  function deleterecords($id)
  {
    $this->db->query("delete from tb_research where dt_id='".$id."'");
  }
  public function search($key){
    $this->db->like('dt_judul_dokumen', $key);
    $query = $this->db->get('tb_research');
    return $query->result();
  }
}
