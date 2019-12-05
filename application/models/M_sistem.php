<?php
defined('BASEPATH') OR exit('Anda tidak boleh mengakses file ini secara langsung'); 
class M_sistem extends CI_Model{	
    function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}		
  	public function addUser($data){
		return $this->db->insert('t_users', $data);
	}
    function list_pertanyaan(){
        $query = $this->db->get('pertanyaan');
        return $query->result();
    }
	function list_gejala_paru(){
        $this->db->where('id_gejala >=', '1');
        $this->db->where('id_gejala <=', '11');

        //$this->db->where('id_gejala',$id); 
        $query = $this->db->get('pertanyaan');
        return $query->result();
    }
    function updateProfile($data,$id){
        $this->db->where('id_user',$id);
        return $this->db->update('t_users',$data);
    }
}

?>