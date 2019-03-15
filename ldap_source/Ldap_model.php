<?php

class Ldap_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
	function ldap_auth($username,$password){

		$auth = 0;
		
		$ldap_config['host'] = 'merahputih.telkom.co.id';
		//$ldap_config['host'] = '36.86.63.182';
		$ldap_config['authrealm'] = 'User Intranet Telkom ND';
		
		if($username != "" && $password != ""){
			
			$link_identifier = @ldap_connect($ldap_config['host']);
			$result_identifier = @ldap_search($link_identifier, " ", 'uid=' . $username);
			
			if($result_identifier){
				
				$result = @ldap_get_entries($link_identifier, $result_identifier);
				
				if(isset($result[0])){
					if (@ldap_bind($link_identifier, $result[0]['dn'], $password)){
						
						$auth=1;
						
					}
				}
			}
		}
		
		return $auth;
		
	}
	
	function ldap_info($username){
		
		$ldap_config['host'] = 'merahputih.telkom.co.id';
		//$ldap_config['host'] = '36.86.63.182';
		$ldap_config['authrealm'] = 'User Intranet Telkom ND';
		
		if ($username) {
			
			$link_identifier = @ldap_connect($ldap_config['host']);
			$result_identifier = @ldap_search($link_identifier, " ", 'uid=' . $username);
			
			if($result_identifier){
				
				$result = @ldap_get_entries($link_identifier, $result_identifier);
			
			}
		}
		
		return $result;
		
	}
	
}
