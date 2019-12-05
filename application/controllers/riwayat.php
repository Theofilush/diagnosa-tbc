<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class riwayat extends CI_Controller {
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	public function index()
	{
		$this->load->view('dashboard/v_header');
		$this->load->view('v_hasil_diagnosa');
		$this->load->view('dashboard/v_footer');
		//echo "beranda";
	}

	
}
