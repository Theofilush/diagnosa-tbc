<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tulangbelakang extends CI_Controller {
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	public function index()
	{
		$listGejalaTulbel = $this->M_sistem->list_gejala_tulbel(); 
		$dataHalaman = array(   		
		  'listGejalaTulbel' => $listGejalaTulbel,
        );
		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('tuberkulosis/v_penyakit_tbc_tulbel');
		$this->load->view('dashboard/v_footer');
	}

}
