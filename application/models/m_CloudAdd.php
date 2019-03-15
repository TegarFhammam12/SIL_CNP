<?php
class m_CloudAdd extends CI_Model{
	public function insert($data){
		return $this->db->insert('tb_cloud', $data);
	}
}
