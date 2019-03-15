<?php
class m_internal extends CI_Model
{
  function fetch_data_research()
  {
    $query = $this->db->get("tb_research");
    return $query->result();
  }
  public function search_research($key){
    $this->db->like('dt_judul_dokumen', $key);
    $query = $this->db->get('tb_research');
    return $query->result();
  }
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

  function fetch_data_telephony()
  {
    $query = $this->db->get("tb_telephony");
    return $query->result();
  }
  public function search_telephony($key){
    $this->db->like('dt_nama', $key);
    $query = $this->db->get('tb_telephony');
    return $query->result();
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

  function fetch_data_internet()
  {
    $query = $this->db->get("tb_internet");
    return $query->result();
  }
  public function search_internet($key){
    $this->db->like('dt_nama', $key);
    $query = $this->db->get('tb_internet');
    return $query->result();
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

  function fetch_data_cloud()
  {
    $query = $this->db->get("tb_cloud");
    return $query->result();
  }
  public function search_cloud($key){
    $this->db->like('dt_nama', $key);
    $query = $this->db->get('tb_cloud');
    return $query->result();
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

  function fetch_data_nomor()
  {
    $query = $this->db->get("tb_nomor");
    return $query->result();
  }
  public function search_nomor($key){
    $this->db->like('dt_nama', $key);
    $query = $this->db->get('tb_nomor');
    return $query->result();
  }
  public function count_tb_nomor(){
    //return $this->db->count_all('tb_telephony');
    return $this->db->get('tb_nomor')->num_rows();
  }
  public function fetch_nomor($limit,$offset){
    //$this->db->limit($limit,$offset);
    //$query = $this->db->get('tb_telephony');
    //if($query->num_rows()>0){
      //return $query->result();
    //}else{
      //return $query->result();
    //}
    return $this->db->get('tb_nomor',$limit,$offset)->result();
  }

  function fetch_data_user()
  {
    $query = $this->db->get("tb_userinternet");
    return $query->result();
  }
  public function search_user($key){
    $this->db->like('dt_nama', $key);
    $query = $this->db->get('tb_userinternet');
    return $query->result();
  }
  public function count_tb_userinternet(){
    //return $this->db->count_all('tb_telephony');
    return $this->db->get('tb_userinternet')->num_rows();
  }
  public function fetch_user($limit,$offset){
    //$this->db->limit($limit,$offset);
    //$query = $this->db->get('tb_telephony');
    //if($query->num_rows()>0){
      //return $query->result();
    //}else{
      //return $query->result();
    //}
    return $this->db->get('tb_userinternet',$limit,$offset)->result();
  }


function fetch_data_pc()
{
  $query = $this->db->get("tb_pc");
  return $query->result();
}

public function search_pc($key){
  $this->db->like('dt_judul_dokumen', $key);
  $query = $this->db->get('tb_pc');
  return $query->result();
}
public function count_tb_pc(){
  //return $this->db->count_all('tb_telephony');
  return $this->db->get('tb_pc')->num_rows();
}
public function fetch_pc($limit,$offset){
  //$this->db->limit($limit,$offset);
  //$query = $this->db->get('tb_telephony');
  //if($query->num_rows()>0){
    //return $query->result();
  //}else{
    //return $query->result();
  //}
  return $this->db->get('tb_pc',$limit,$offset)->result();
  }
}
