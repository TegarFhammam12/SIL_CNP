<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Auth_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
		$this->load->library('ion_auth');
    }
    
	function login($email,$remember){
		
		$password = 'G6b8p4nZsMw3MRuD';
		
		if($this->ion_auth->login($email, $password, $remember)){
			
			return true;
			
		}
	}
	
    function addOpenstackUser($id_user,$param1,$param2){
		
		$data = array(
					'param1' => $param1,
					'param2' => $param2,
				);
				 
		if($this->ion_auth->update($id_user, $data) == true){
			
			return true;
			
		}
    }
	
	function firstLogin($email,$remember,$additional_data){
		
		$password = 'G6b8p4nZsMw3MRuD';
		
		//daftar user ke database
		if ($this->ion_auth->register($email, $password, $email, $additional_data) == true){

			//echo "udah kedaftar <br/>";
			
			//langsung masuk abis daftar
			if($this->login($email,$remember) == true){
				
				//echo "langsung masuk abis buat akun <br/>";

				$id_user = $this->ion_auth->user()->row()->id;
				$param1 = substr(md5(rand()), 0, 9);
				$param2 = substr(md5(rand()), 0, 9);

				//buat credentials akun openstack
				if($this->addOpenstackUser($id_user,$param1,$param2) == true){
					
					//echo "berhasil input data akun openstack <br/>";
					$this->load->model(array('Openstack_model','Email_model'));
					
					//buat akun openstack
					$this->Openstack_model->createAccount($email,$param1,$param2);
					
					//grant akun openstack ke project
					$this->Openstack_model->grantRole($email,$id_user);
					
					$this->Email_model->welcomeEmail($email,$this->ion_auth->user()->row()->name);
					
					//echo "<br/>berhasil buat akun openstack<br/>";
					
					
				}
			}
		}
	}
    
	function admin_login($email,$remember){
		
		$this->login($email,$remember);
		redirect('admin/index', 'refresh');
		
	}
	
}
