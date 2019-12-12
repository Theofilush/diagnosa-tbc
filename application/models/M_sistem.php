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
    function list_gejala(){
    	$this->db->order_by('id_gejala', 'ASC');
        $query = $this->db->get('pertanyaan');
        return $query->result();
    }
	function list_gejala_paru(){
        $this->db->where('id_gejala', '1');        

        $query = $this->db->get('pertanyaan');
        return $query->result();
    }
    function list_gejala_payudara(){
        $this->db->where('id_gejala', '3');
         
        $query = $this->db->get('pertanyaan');
        return $query->result();
    }
    function list_gejala_getahbening(){
        $this->db->where('id_gejala', '2');
         
        $query = $this->db->get('pertanyaan');
        return $query->result();
    }
    function list_gejala_tulbel(){
        $this->db->where('id_gejala', '4');
         
        $query = $this->db->get('pertanyaan');
        return $query->result();
    }
    function list_gejala_salkem(){
        $this->db->where('id_gejala >=', '5');
         
        $query = $this->db->get('pertanyaan');
        return $query->result();
    }
    function updateProfile($data,$id){
        $this->db->where('id_user',$id);
        return $this->db->update('t_users',$data);
    }
}

?>