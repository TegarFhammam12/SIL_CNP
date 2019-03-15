<?php
class m_admin_table extends CI_Model{
	public function insert($data){
		return $this->db->insert('tb_admin', $data);
	}
	function deleterecords($id)
  {
    $this->db->query("delete from tb_admin where dt_nip='".$id."'");
  }
  public function fetch_data(){
    $query = $this->db->get("tb_admin");
    //$query = $  this->db->query("SELECT * FROM tb_telephony ORDER BY dt_id ASC");
    return $query->result();
  }
}
