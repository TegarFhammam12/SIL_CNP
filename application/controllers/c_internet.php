<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_internet extends CI_Controller {
	public function construct()
	{
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('session');
	}
	public function sgenerator($offset = 0){
		$key = $this->input->post('search');
		$this->load->model('m_internet');
		if(isset($key) and !empty($key)){
			$data['offset'] = $offset;
			$data['fetch_data'] = $this->m_internet->search($key);
			$data['paging'] = '';
			$this->load->view('Operator/v_internet', $data);
		}else{
			echo "<script> alert('Data tidak ditemukan!');location='".base_url()."index.php/c_telephony'</script>";
		}
	}

	public function deletedata()
	{
			$this->load->model('m_internet');
			$id=$this->input->get('dt_id');
			$this->m_internet->deleterecords($id);
			echo "<script> alert('Data berhasil dihapus');location='".base_url()."index.php/c_internet'</script>";
	}
	public function index($offset = 0)
	{
		if($this->session->userdata('level')=="superadmin" || $this->session->userdata('level')=="admin"){
			$this->load->library('pagination');
			$this->load->model('m_editdata');
			$limit = 5;
			$config['base_url'] = base_url('index.php/c_internet/index');
			$config['total_rows'] = $this->m_editdata->count_tb_internet();
			$config['per_page'] = $limit;

			$this->pagination->initialize($config);
			$data['offset'] = $offset;
			$data['paging'] = $this->pagination->create_links();
			$data['fetch_data'] = $this->m_editdata->fetch_internet($limit, $offset);
			//var_dump($data);
			//Die();
			$this->load->view('Operator/v_internet', $data);
		}
		else{
			redirect('c_login/index');
		}
		}
}
