<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_InternetAdd extends CI_Controller {
		public function construct()
		{
			parent::__construct();
			$this->load->helper('url');
		}
		public function saved()
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
					$config['upload_path']='./assets/image/upload';
					$config['allowed_types']='jpg|png|gif|jpeg|bmp';
					$this->load->library('upload',$config);

					  if(!$this->upload->do_upload("gambar"))
					  {
					    echo $this->upload->display_errors();exit();
					    echo"<script> alert('Upload gagal!');window.location.href='".base_url('c_InternetAdd')."'</script>";
					    exit();
					  }
					$file = $this->upload->data();
					$data['dt_gambar'] = $file['file_name'];
					$this->load->model('m_InternetAdd');
					$this->m_InternetAdd->insert($data);
			}
					redirect('c_dashboard');
		 }
		public function index(){
			if($this->session->userdata('level')=="superadmin" || $this->session->userdata('level')=="admin"){
				$this->load->view('Operator/v_internet-add');
			}
			else{
				redirect('c_login/index');
			}
		}
}
