<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class getahbening extends CI_Controller {
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	public function index()
	{
		$listGejalaGeben = $this->M_sistem->list_gejala_getahbening(); 
		$dataHalaman = array(   		
		  'listGejalaGeben' => $listGejalaGeben,
        );
		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('tuberkulosis/v_penyakit_tbc_geben');
		$this->load->view('dashboard/v_footer');
	}

}
