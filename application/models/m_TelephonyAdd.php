<?php
class m_TelephonyAdd extends CI_Model{
	public function insert($data){
		return $this->db->insert('tb_telephony', $data);
	}
}
