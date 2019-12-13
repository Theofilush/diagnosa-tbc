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
    	$this->db->order_by('id_gejala', 'ASC');
        $query = $this->db->get('pertanyaan');
        return $query->result();
    }
    function list_gejala(){
        $query = $this->db->get('pertanyaan');
        return $query->result();
    }
    function list_konsultasi($iduser){    	
		$this->db->select('*');
        $this->db->from('konsultasi');
        $this->db->join('t_users', 'konsultasi.id_pasien = t_users.id_user','RIGHT');
        $this->db->where('id_pasien',$iduser);
        $this->db->group_by('id_pasien');  
		return $this->db->get()->result();
    }
    function list_pengetahuan2($iduser){    	
		$this->db->select('*');
        $this->db->from('pengetahuan2');
        $this->db->join('t_users', 'pengetahuan2.id_user = t_users.id_user','RIGHT');
        $this->db->where('pengetahuan2.id_user',$iduser);
        //$this->db->group_by('id_pasien');  
		return $this->db->get()->result();
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
    function saveDiagnosa($data){
        return $this->db->insert('konsultasi', $data);
    }  
    function savePengetahuan2($data){
        return $this->db->insert('pengetahuan2', $data);
    }  
    
}

?>