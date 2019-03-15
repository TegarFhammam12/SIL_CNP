<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_dashboard extends CI_Controller {
		function construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->model('m_login');
			$this->load->library('session');
			//print_r($this->session->userdata('level'));
		}
		public function index(){
			if($this->session->userdata('level')=="superadmin" || $this->session->userdata('level')=="admin"){
			$this->load->view('Operator/v_dashboard');
			}
			else{
				redirect('c_login/index');
			}
	}
}
