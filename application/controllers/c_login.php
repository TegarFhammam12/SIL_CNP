<?php
class c_login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('m_login');
		$this->load->library('session');
	}

	function index()
	{
		$this->load->view('Guest/v_login');
	}

	function proses_auth(){
		$this->load->model('m_login');
		$user=$this->input->post('username');
		$pass=$this->input->post('password');
		$pass=md5($pass);

		$check_auth = $this->m_login->auth($user,$pass);
		if($check_auth){
			foreach($check_auth as $row);
			$this->session->set_userdata('nip', $row->dt_nip);
			$this->session->set_userdata('nama', $row->dt_nama);
			$this->session->set_userdata('email', $row->dt_email);
			$this->session->set_userdata('username', $row->dt_username);
			$this->session->set_userdata('password', $row->dt_password);
			$this->session->set_userdata('no_telp', $row->dt_no_telp);
			$this->session->set_userdata('level', $row->level);

			if($this->session->userdata('level')=="superadmin"){
				redirect('c_superadmin/index');
			}elseif($this->session->userdata('level')=="admin"){
				redirect('c_admin/index');
			}
		}else{
			$url=base_url();
			echo $this->session->set_flashdata('msg','Username Atau Password Salah');
			redirect('c_login/index');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('Welcome/index');
	}
}
