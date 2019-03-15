<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{
	
	public function __construct(){
		
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		$this->lang->load('auth');
		$this->load->library('form_validation');
		$tables = $this->config->item('tables','ion_auth');
		$this->load->model('Auth_model');		
	}
	
	public function index(){
		$this->login();
	}

	public function login($rules = "int"){
		if($rules == "adm"){
			/* Administrator Login */
			if($this->ion_auth->logged_in()){
				if($this->ion_auth->is_admin()){
					redirect('admin/index', 'refresh');
				}else{		
					redirect('dashboard/index', 'refresh');	
				}
			}		
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			
			if($this->form_validation->run()){
				
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$remember = (bool) $this->input->post('remember');
				
				if($this->ion_auth->login($email, $password, $remember) == true){
					
					redirect('admin','refresh');
					
				}else{
					
					redirect('auth/login/adm','refresh');
					
				}
				
			}else{
				
				$this->load->view('account_management/adm1n');
				
			}
		}else if($rules == "int"){	
			/* Internal (NIK) Login */
			if($this->ion_auth->logged_in()){
				
				if($this->ion_auth->is_admin()){
					
					redirect('admin/index', 'refresh');
					
				}else{
					
					redirect('dashboard/index', 'refresh');
					
				}
				
			}

			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			
			if($this->form_validation->run()){
				
				$username = $this->input->post('email');
				$email 	  = $username . "@telkom.co.id";
				$password = $this->input->post('password');
				$remember = (bool) $this->input->post('remember');
				
				$this->load->model('Ldap_model');
				
				if($this->Ldap_model->ldap_auth($username,$password) == 1){
					
					if($this->ion_auth->email_check($email) == true){
						
						//kalo udah terdafar emailnya
						$this->Auth_model->login($email,$remember);
						redirect('dashboard/index', 'refresh');
						
					}else{
						
						//kalo belom terdafar emailnya
						$nama	= $this->Ldap_model->ldap_info($username);
						$nama   = $nama[0]['cn'][0];
						
						$additional_data = array(
							'is_admin'	=> 0,
							'name'	=> $nama,
							'user_id_os' => 'default',
							'param1' => 'default',
							'param2' => 'default',
						);
						
						$this->Auth_model->firstLogin($email,$remember,$additional_data);
						redirect('dashboard/index', 'refresh');
						
					}
					
				}else{
					
					echo "gagal otentikasi ke server ldap";
					
				}
				
			}else{
				
				$this->load->view('account_management/login');
				
			}
		}else{
			/* Default Login Page (Public) */
			if($this->ion_auth->logged_in()){
				if($this->ion_auth->is_admin()){
					redirect('admin/index', 'refresh');
				}else{		
					redirect('dashboard/index', 'refresh');	
				}
			}		
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			
			if($this->form_validation->run()){
				
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$remember = (bool) $this->input->post('remember');
				
				if($this->ion_auth->login($email, $password, $remember) == true){
					
					redirect('dashboard/index','refresh');
					
				}else{
					
					$this->load->view('account_management/login_pub');
					
				}
				
			}else{
				
				$this->load->view('account_management/login_pub');
				
			}
		}
	}

	public function logout(){

		// log the user out
		$logout = $this->ion_auth->logout();

		// redirect them to the login page
		$this->session->set_flashdata('message', $this->ion_auth->messages());
		redirect(base_url(), 'refresh');
		
	}
	
	public function register(){
		$this->load->helper('url');
		$this->load->view('account_management/register');		

		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('cemail', 'CEmail', 'required|matches[email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('cpassword', 'Cpassword', 'required|matches[password]');
	}
}
