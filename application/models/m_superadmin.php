<?php
class m_superadmin extends CI_Model
{
  public function tampil_data_admin($kode)
  {
    $this->db->where_in('dt_nip', $kode);
    return $this->db->get('tb_admin')->result();
  }
  public function edit_data_admin($data)
  {
    $this->db->where('dt_nip',$data['dt_nip']);
    $hasil=$this->db->update('tb_admin', $data);
    return $hasil;
  }
}
