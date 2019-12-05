<?php
defined('BASEPATH') OR exit('Anda tidak boleh mengakses file ini secara langsung'); 
class M_sistem extends CI_Model{	
    function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}		
  	public function addUser($data){
		return $this->db->insert('t_users', $data);
	}

	
}

?>