<?php
defined('BASEPATH') OR exit('Anda tidak boleh mengakses file ini secara langsung'); 
class M_login extends CI_Model{	
    function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	function cek_logina($table,$where){		
		return $this->db->get_where($table,$where)->result();
	}		
  	public function addUser($data){
		return $this->db->insert('t_users', $data);
	}

	
}

?>