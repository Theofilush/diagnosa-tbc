<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class payudara extends CI_Controller {
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	public function index()
	{
		$listGejalaPayu = $this->M_sistem->list_gejala_payudara(); 
		$dataHalaman = array(   		
		  'listGejalaPayu' => $listGejalaPayu,
        );
		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('tuberkulosis/v_penyakit_tbc_payudara');
		$this->load->view('dashboard/v_footer');
	}

}
