<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class paru extends CI_Controller {
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	public function index()
	{
		$listGejalaParu = $this->M_sistem->list_gejala_paru(); 
		$dataHalaman = array(   		
		  'listGejalaParu' => $listGejalaParu,
        );
		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('tuberkulosis/v_penyakit_tbc_paru');
		$this->load->view('dashboard/v_footer');
	}

}
