<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_ResearchAdd extends CI_Controller {
		public function construct()
		{
			parent::__construct();
			$this->load->helper('url');
		}
		public function saved()
		{
			if($_POST)
			{
					$data['dt_judul_dokumen']	=$this->input->post('judul_dokumen');
					$data['dt_nomor_dokumen']	=$this->input->post('nomor_dokumen');
					$data['dt_tahun_terbit']	=$this->input->post('date_picker');
					$config['upload_path']='./assets/image/upload';
					$config['allowed_types']='jpg|png|gif|jpeg|bmp|pdf';
					$this->load->library('upload',$config);

					  if(!$this->upload->do_upload("file_dokumen"))
					  {
					    echo $this->upload->display_errors();exit();
					    echo"<script> alert('Upload gagal!');window.location.href='".base_url('c_ResearchAdd')."'</script>";
					    exit();
					  }
					$file = $this->upload->data();
					$data['dt_file'] = $file['file_name'];
					$this->load->model('m_ResearchAdd');
					$this->m_ResearchAdd->insert($data);
			}
					redirect('c_dashboard');
		 }
		public function index(){
			if($this->session->userdata('level')=="superadmin" || $this->session->userdata('level')=="admin"){
				$this->load->view('Operator/v_research-add');
			}
			else{
				redirect('c_login/index');
			}
		}
}
