<?php
class c_editdata extends CI_Controller {
  public function tampil_edit_research($kode)
    {
      $this->load->model('m_editdata');
      $data['tb_research']=$this->m_editdata->tampil_data_research($kode);
      $this->load->view('Operator/v_edit_research',$data);
    }
  public function tampil_edit_telephony($kode)
    {
      $this->load->model('m_editdata');
      $data['tb_telephony']=$this->m_editdata->tampil_data_telephony($kode);
      $this->load->view('Operator/v_edit_telephony',$data);
    }
  public function tampil_edit_internet($kode)
    {
      $this->load->model('m_editdata');
      $data['tb_internet']=$this->m_editdata->tampil_data_internet($kode);
      $this->load->view('Operator/v_edit_internet',$data);
    }
  public function tampil_edit_cloud($kode)
    {
      $this->load->model('m_editdata');
      $data['tb_cloud']=$this->m_editdata->tampil_data_cloud($kode);
      $this->load->view('Operator/v_edit_cloud',$data);
    }
  public function edit_data_telephony()
  {
    if($_POST)
    {
      $data['dt_nama']	=$this->input->post('nama_perangkat');
      $data['dt_merk']	=$this->input->post('merk');
      $data['dt_jumlah']	=$this->input->post('jumlah');
      $data['dt_tersedia']	=$this->input->post('tersedia');
      $data['dt_TglMasuk']	=$this->input->post('datepicker');
      $data['dt_lokasi']	=$this->input->post('lokasi');
      $data['dt_AlamatIP']	=$this->input->post('alamatip');
      $data['dt_spesifikasi']	= $this->input->post('spesifikasi');
      $data['dt_deskripsi']	= $this->input->post('description');
      $data['dt_id']	= $this->input->post('data_id');
      //$kode = $this->input->post('dt_id');
      $this->load->model('m_editdata');
      $data['tb_telephony'] =$this->m_editdata->edit_data_telephony($data);
    echo "<script> alert('Data berhasil diedit');location='".base_url()."index.php/c_telephony'</script>";
  }
}
  public function edit_data_internet()
  {
    if($_POST)
    {
      $data['dt_nama']	=$this->input->post('nama_perangkat');
      $data['dt_merk']	=$this->input->post('merk');
      $data['dt_jumlah']	=$this->input->post('jumlah');
      $data['dt_tersedia']	=$this->input->post('tersedia');
      $data['dt_TglMasuk']	=$this->input->post('datepicker');
      $data['dt_lokasi']	=$this->input->post('lokasi');
      $data['dt_AlamatIP']	=$this->input->post('alamatip');
      $data['dt_spesifikasi']	= $this->input->post('spesifikasi');
      $data['dt_deskripsi']	= $this->input->post('description');
      $data['dt_id']	= $this->input->post('data_id');
      //$kode = $this->input->post('dt_id');
      $this->load->model('m_editdata');
      $data['tb_internet'] =$this->m_editdata->edit_data_internet($data);
    echo "<script> alert('Data berhasil diedit');location='".base_url()."index.php/c_internet'</script>";
  }
  }
  public function edit_data_cloud()
  {
    if($_POST)
    {
      $data['dt_nama']	=$this->input->post('nama_perangkat');
      $data['dt_merk']	=$this->input->post('merk');
      $data['dt_jumlah']	=$this->input->post('jumlah');
      $data['dt_tersedia']	=$this->input->post('tersedia');
      $data['dt_TglMasuk']	=$this->input->post('datepicker');
      $data['dt_lokasi']	=$this->input->post('lokasi');
      $data['dt_AlamatIP']	=$this->input->post('alamatip');
      $data['dt_spesifikasi']	= $this->input->post('spesifikasi');
      $data['dt_deskripsi']	= $this->input->post('description');
      $data['dt_id']	= $this->input->post('data_id');
      //$kode = $this->input->post('dt_id');
      $this->load->model('m_editdata');
      $data['tb_cloud'] =$this->m_editdata->edit_data_cloud($data);
    echo "<script> alert('Data berhasil diedit');location='".base_url()."index.php/c_cloud'</script>";
  }
  }
  public function edit_data_research()
  {
    if($_POST)
    {
      $data['dt_judul_dokumen']	=$this->input->post('judul_dokumen');
      $data['dt_nomor_dokumen']	=$this->input->post('nomor_dokumen');
      $data['dt_tahun_terbit']	=$this->input->post('date_picker');
      $data['dt_id']	= $this->input->post('dt_id');
      $config['upload_path']='./assets/image/upload';
      $config['allowed_types']='jpg|png|gif|jpeg|bmp|pdf';
      $this->load->library('upload',$config);

        if(!$this->upload->do_upload("dt_file"))
        {
          //echo $this->upload->display_errors();exit();
          echo"<script> alert('Upload gagal!');window.location.href='".base_url('index.php/c_research/index')."'</script>";
          exit();
        }
      $file = $this->upload->data();
      $data['dt_file'] = $file['file_name'];
      //$kode = $this->input->post('dt_id');
      $this->load->model('m_editdata');
      $data['tb_research'] =$this->m_editdata->edit_data_research($data);
      echo "<script> alert('Data berhasil diedit');location='".base_url()."index.php/c_research/index'</script>";
  }
  }
}
