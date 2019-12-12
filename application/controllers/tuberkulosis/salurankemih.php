<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class salurankemih extends CI_Controller {
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	public function index()
	{
		$listGejalaSalkem = $this->M_sistem->list_gejala_salkem(); 
		$dataHalaman = array(   		
		  'listGejalaSalkem' => $listGejalaSalkem,
        );
		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('tuberkulosis/v_penyakit_tbc_salkem');
		$this->load->view('dashboard/v_footer');
	}

}
