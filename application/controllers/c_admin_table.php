<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_admin_table extends CI_Controller {
		public function construct()
		{
			parent::__construct();
			$this->load->helper('url');
		}
		public function saved()
		{
			if($_POST)
			{

					$data['dt_nip']	=$this->input->post('nip');
					$data['dt_nama']	=$this->input->post('nama');
					$data['dt_email']	=$this->input->post('email');
					$data['dt_username']	=$this->input->post('username');
					$data['dt_password']	=md5($this->input->post('password'));
					$data['dt_no_telp']	=$this->input->post('no_telp');
					$data['level']	=$this->input->post('level');

					$this->load->model('m_admin_table');
					$this->m_admin_table->insert($data);
			}
					redirect('c_dashboard');
		 }
		public function deletedata()
 		{
 			$this->load->model('m_admin_table');
 			$id=$this->input->get('dt_nip');
 			$this->m_admin_table->deleterecords($id);
 			echo "<script> alert('Data berhasil dihapus');location='".base_url()."index.php/c_admin_table/index'</script>";
 		}
		public function register(){
			$this->load->view('Operator/v_register');
		}
		public function index(){
			if($this->session->userdata('level')=="superadmin" || $this->session->userdata('level')=="admin"){
				$this->load->model("m_admin_table");
				$data["fetch_data"] = $this->m_admin_table->fetch_data();
				$this->load->view('Operator/v_admin_table',$data);
			}
			else{
				redirect('c_login/index');
			}
		}
}
