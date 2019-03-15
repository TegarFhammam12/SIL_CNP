<?php
class m_editdata extends CI_Model
{
  public function count_tb_research(){
    //return $this->db->count_all('tb_telephony');
    return $this->db->get('tb_research')->num_rows();
  }
  public function fetch_research($limit,$offset){
    //$this->db->limit($limit,$offset);
    //$query = $this->db->get('tb_telephony');
    //if($query->num_rows()>0){
      //return $query->result();
    //}else{
      //return $query->result();
    //}
    return $this->db->get('tb_research',$limit,$offset)->result();
  }
  public function count_tb_telephony(){
    //return $this->db->count_all('tb_telephony');
    return $this->db->get('tb_telephony')->num_rows();
  }
  public function fetch_telephony($limit,$offset){
    //$this->db->limit($limit,$offset);
    //$query = $this->db->get('tb_telephony');
    //if($query->num_rows()>0){
      //return $query->result();
    //}else{
      //return $query->result();
    //}
    return $this->db->get('tb_telephony',$limit,$offset)->result();
  }
  public function count_tb_internet(){
    //return $this->db->count_all('tb_telephony');
    return $this->db->get('tb_internet')->num_rows();
  }
  public function fetch_internet($limit,$offset){
    //$this->db->limit($limit,$offset);
    //$query = $this->db->get('tb_telephony');
    //if($query->num_rows()>0){
      //return $query->result();
    //}else{
      //return $query->result();
    //}
    return $this->db->get('tb_internet',$limit,$offset)->result();
  }
  public function count_tb_cloud(){
    //return $this->db->count_all('tb_telephony');
    return $this->db->get('tb_cloud')->num_rows();
  }
  public function fetch_cloud($limit,$offset){
    //$this->db->limit($limit,$offset);
    //$query = $this->db->get('tb_telephony');
    //if($query->num_rows()>0){
      //return $query->result();
    //}else{
      //return $query->result();
    //}
    return $this->db->get('tb_cloud',$limit,$offset)->result();
  }
  public function tampil_data_telephony($kode)
  {
    $this->db->where_in('dt_id', $kode);
    return $this->db->get('tb_telephony')->result();
  }
  public function tampil_data_internet($kode)
  {
    $this->db->where_in('dt_id', $kode);
    return $this->db->get('tb_internet')->result();
  }
  public function tampil_data_cloud($kode)
  {
    $this->db->where_in('dt_id', $kode);
    return $this->db->get('tb_cloud')->result();
  }
  public function tampil_data_research($kode)
  {
    $this->db->where_in('dt_id', $kode);
    return $this->db->get('tb_research')->result();
  }
  public function edit_data_telephony($data)
  {
    //$this->db->query("update from tb_telephony where dt_id = '.$kode'");
    //$this->db->where('dt_id',$kode);
    //$this->db->update('tb_telephony',$data);
    $this->db->where('dt_id',$data['dt_id']);
    $hasil=$this->db->update('tb_telephony', $data);
    return $hasil;
  }
  public function edit_data_internet($data)
  {
    $this->db->where('dt_id',$data['dt_id']);
    $hasil=$this->db->update('tb_internet', $data);
    return $hasil;
  }
  public function edit_data_cloud($data)
  {
    $this->db->where('dt_id',$data['dt_id']);
    $hasil=$this->db->update('tb_cloud', $data);
    return $hasil;
  }
  public function edit_data_research($data)
  {
    $this->db->where('dt_id',$data['dt_id']);
    $hasil=$this->db->update('tb_research', $data);
    return $hasil;
  }
}
