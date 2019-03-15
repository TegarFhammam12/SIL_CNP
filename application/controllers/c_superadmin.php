<?php
class c_superadmin extends CI_Controller {
	function construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('m_login');
		$this->load->library('session');
		if($this->session->userdata('level')!="superadmin"){
	redirect('c_login/index');
	}
	}
	public function tampil_edit_admin($kode)
		{
			$this->load->model('m_superadmin');
			$data['tb_admin']=$this->m_superadmin->tampil_data_admin($kode);
			$this->load->view('Operator/v_edit_admin',$data);
		}
	public function edit_data_admin()
		{
			if($_POST)
			{
				$data['dt_nip']	=$this->input->post('nip');
				$data['dt_nama']	=$this->input->post('nama');
				$data['dt_email']	=$this->input->post('email');
				$data['dt_username']	=$this->input->post('username');
				$data['dt_password']	=$this->input->post('password');
				$data['dt_no_telp']	=$this->input->post('no_telp');
				$data['level']	=$this->input->post('level');
				$this->load->model('m_superadmin');
				$data['tb_admin'] =$this->m_superadmin->edit_data_admin($data);
			echo "<script> alert('Data berhasil diedit');location='".base_url()."index.php/c_admin_table'</script>";
		}
		}
	public function index(){
		if($this->session->userdata('level')!="superadmin"){
		redirect('c_login/index');
		}
		$this->load->view('Operator/v_dashboard');
	}
}
