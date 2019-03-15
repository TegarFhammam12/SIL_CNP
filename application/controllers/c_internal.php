<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_internal extends CI_Controller {
	public function construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
	}
	public function sgenerator_research($offset = 0){
		$key = $this->input->post('search');
		$this->load->model('m_internal');
		if(isset($key) and !empty($key)){
			$data['offset'] = $offset;
			$data['fetch_data'] = $this->m_internal->search_research($key);
			$data['paging'] = '';
			$this->load->view('Internal/v_research',$data);
		}else{
			echo "<script> alert('Data tidak ditemukan!');location='".base_url()."index.php/c_internal/research'</script>";
		}
	}

	public function research($offset = 0)
	{
		$this->load->library('pagination');
		$this->load->model('m_internal');
		$limit = 4;
		$config['base_url'] = base_url('index.php/c_internal/research');
		$config['total_rows'] = $this->m_internal->count_tb_research();
		$config['per_page'] = $limit;

		$this->pagination->initialize($config);
		$data['offset'] = $offset;
		$data['paging'] = $this->pagination->create_links();
		$data['fetch_data'] = $this->m_internal->fetch_research($limit, $offset);
		//var_dump($data);
		//Die();
		$this->load->view('Internal/v_research',$data);
	}

	public function sgenerator_telephony($offset = 0){
		$key = $this->input->post('search');
		$this->load->model('m_internal');
		if(isset($key) and !empty($key)){
			$data['offset'] = $offset;
			$data['fetch_data'] = $this->m_internal->search_telephony($key);
			$data['paging'] = '';
			$this->load->view('Internal/v_telephony',$data);
		}else{
			echo "<script> alert('Data tidak ditemukan!');location='".base_url()."index.php/c_internal/telephony'</script>";
		}
	}
	public function telephony($offset = 0)
	{
		$this->load->library('pagination');
		$this->load->model('m_internal');
		$limit = 4;
		$config['base_url'] = base_url('index.php/c_internal/telephony');
		$config['total_rows'] = $this->m_internal->count_tb_telephony();
		$config['per_page'] = $limit;

		$this->pagination->initialize($config);
		$data['offset'] = $offset;
		$data['paging'] = $this->pagination->create_links();
		$data['fetch_data'] = $this->m_internal->fetch_telephony($limit, $offset);
		//var_dump($data);
		//Die();
		$this->load->view('Internal/v_telephony',$data);
	}

	public function sgenerator_internet($offset = 0){
		$key = $this->input->post('search');
		$this->load->model('m_internal');
		if(isset($key) and !empty($key)){
			$data['offset'] = $offset;
			$data['fetch_data'] = $this->m_internal->search_internet($key);
			$data['paging'] = '';
			$this->load->view('Internal/v_internet',$data);
		}else{
			echo "<script> alert('Data tidak ditemukan!');location='".base_url()."index.php/c_internal/internet'</script>";
		}
	}
	public function internet($offset = 0)
	{
		$this->load->library('pagination');
		$this->load->model('m_internal');
		$limit = 4;
		$config['base_url'] = base_url('index.php/c_internal/internet');
		$config['total_rows'] = $this->m_internal->count_tb_internet();
		$config['per_page'] = $limit;

		$this->pagination->initialize($config);
		$data['offset'] = $offset;
		$data['paging'] = $this->pagination->create_links();
		$data['fetch_data'] = $this->m_internal->fetch_internet($limit, $offset);
		//var_dump($data);
		//Die();
		$this->load->view('Internal/v_internet',$data);
	}

	public function sgenerator_cloud($offset = 0){
		$key = $this->input->post('search');
		$this->load->model('m_internal');
		if(isset($key) and !empty($key)){
			$data['offset'] = $offset;
			$data['fetch_data'] = $this->m_internal->search_cloud($key);
			$data['paging'] = '';
			$this->load->view('Internal/v_cloud',$data);
		}else{
			echo "<script> alert('Data tidak ditemukan!');location='".base_url()."index.php/c_internal/cloud'</script>";
		}
	}
	public function cloud($offset = 0)
	{
		$this->load->library('pagination');
		$this->load->model('m_internal');
		$limit = 4;
		$config['base_url'] = base_url('index.php/c_internal/cloud');
		$config['total_rows'] = $this->m_internal->count_tb_cloud();
		$config['per_page'] = $limit;

		$this->pagination->initialize($config);
		$data['offset'] = $offset;
		$data['paging'] = $this->pagination->create_links();
		$data['fetch_data'] = $this->m_internal->fetch_cloud($limit, $offset);
		//var_dump($data);
		//Die();
		$this->load->view('Internal/v_cloud',$data);
	}
	public function sgenerator_nomor($offset = 0){
		$key = $this->input->post('search');
		$this->load->model('m_internal');
		if(isset($key) and !empty($key)){
			$data['offset'] = $offset;
			$data['fetch_data'] = $this->m_internal->search_nomor($key);
			$data['paging'] = '';
			$this->load->view('Internal/v_nomor',$data);
		}else{
			echo "<script> alert('Data tidak ditemukan!');location='".base_url()."index.php/c_internal/nomor'</script>";
		}
	}
	public function nomor($offset = 0)
	{
		$this->load->library('pagination');
		$this->load->model('m_internal');
		$limit = 4;
		$config['base_url'] = base_url('index.php/c_internal/nomor');
		$config['total_rows'] = $this->m_internal->count_tb_nomor();
		$config['per_page'] = $limit;

		$this->pagination->initialize($config);
		$data['offset'] = $offset;
		$data['paging'] = $this->pagination->create_links();
		$data['fetch_data'] = $this->m_internal->fetch_nomor($limit, $offset);
		//var_dump($data);
		//Die();
		$this->load->view('Internal/v_nomor',$data);
	}
	public function sgenerator_user($offset = 0){
		$key = $this->input->post('search');
		$this->load->model('m_internal');
		if(isset($key) and !empty($key)){
			$data['offset'] = $offset;
			$data['fetch_data'] = $this->m_internal->search_user($key);
			$data['paging'] = '';
			$this->load->view('Internal/v_user',$data);
		}else{
			echo "<script> alert('Data tidak ditemukan!');location='".base_url()."index.php/c_internal/user'</script>";
		}
	}
	public function user($offset = 0)
	{
		$this->load->library('pagination');
		$this->load->model('m_internal');
		$limit = 4;
		$config['base_url'] = base_url('index.php/c_internal/user');
		$config['total_rows'] = $this->m_internal->count_tb_userinternet();
		$config['per_page'] = $limit;

		$this->pagination->initialize($config);
		$data['offset'] = $offset;
		$data['paging'] = $this->pagination->create_links();
		$data['fetch_data'] = $this->m_internal->fetch_user($limit, $offset);
		//var_dump($data);
		//Die();
		$this->load->view('Internal/v_user',$data);
	}

public function sgenerator_pc($offset = 0){
	$key = $this->input->post('pc');
	$this->load->model('m_internal');
	if(isset($key) and !empty($key)){
		$data['offset'] = $offset;
		$data['fetch_data'] = $this->m_internal->search_pc($key);
		$data['paging'] = '';
		$this->load->view('Internal/v_pc',$data);
	}else{
		echo "<script> alert('Data tidak ditemukan!');location='".base_url()."index.php/c_internal/pc'</script>";
	}
}

public function pc($offset = 0)
{
	$this->load->library('pagination');
	$this->load->model('m_internal');
	$limit = 4;
	$config['base_url'] = base_url('index.php/c_internal/pc');
	$config['total_rows'] = $this->m_internal->count_tb_pc();
	$config['per_page'] = $limit;

	$this->pagination->initialize($config);
	$data['offset'] = $offset;
	$data['paging'] = $this->pagination->create_links();
	$data['fetch_data'] = $this->m_internal->fetch_pc($limit, $offset);
	//var_dump($data);
	//Die();
	$this->load->view('Internal/v_pc',$data);
	}
}
