<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_internal_dashboard extends CI_Controller {
	public function construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('Internal/v_dashboard');
	}
}
