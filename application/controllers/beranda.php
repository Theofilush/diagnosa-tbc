<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class beranda extends CI_Controller {
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	
	public function index()
	{
		$listGejala = $this->M_sistem->list_gejala(); 
		$dataHalaman = array(   		
		  'listGejala' => $listGejala,
        );
		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('v_beranda');
		$this->load->view('dashboard/v_footer');
		//echo "beranda";
	}

	
}
