<?php
class m_InternetAdd extends CI_Model{
	public function insert($data){
		return $this->db->insert('tb_internet', $data);
	}
}
