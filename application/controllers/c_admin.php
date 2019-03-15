<?php
class c_admin extends CI_Controller {
	function construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('m_login');
		$this->load->library('session');
	}
	public function tampil_edit_admin($kode)
		{
			$this->load->model('m_superadmin');
			$data['tb_admin']=$this->m_superadmin->tampil_data_admin($kode);
			$this->load->view('Operator/v_edit_data_diri',$data);
		}
	public function edit_data_admin()
		{
			$this->load->view('Operator/v_edit_data_diri');
			if($_POST)
			{
				$data['dt_nip']	=$this->input->post('nip');
				$data['dt_nama']	=$this->input->post('nama');
				$data['dt_email']	=$this->input->post('email');
				$data['dt_username']	=$this->input->post('username');
				$data['dt_password']	=md5($this->input->post('password'));
				$data['dt_no_telp']	=$this->input->post('no_telp');
				$data['level']	=$this->input->post('level');
				$this->load->model('m_admin');
				$data['tb_admin'] =$this->m_admin->edit_data_admin($data);
			echo "<script> alert('Data berhasil diedit');location='".base_url()."index.php/c_admin'</script>";
		}
		}
	public function tampil_sett(){
		$this->load->view('Operator/v_edit_data_diri');
	}
  function index()
	{
		if($this->session->userdata('level')!="admin"){
		redirect('c_login/index');
		}
		$this->load->view('Operator/v_dashboard');
	}
}
