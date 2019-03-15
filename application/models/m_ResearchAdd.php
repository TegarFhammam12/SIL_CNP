<?php
class m_ResearchAdd extends CI_Model{
	public function insert($data){
		return $this->db->insert('tb_research', $data);
	}
}
