<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_about extends CI_Controller {
	public function construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('Guest/v_about');
	}
}
