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
		$idUser = $this->session->userdata('id_user');

		$listPertanyaan = $this->M_sistem->list_pertanyaan(); 
		$listKonsultasi = $this->M_sistem->list_konsultasi($idUser); 
		$listPengetahuan2 = $this->M_sistem->list_pengetahuan2($idUser); 
		$dataHalaman = array(   		
		  'listPertanyaan' => $listPertanyaan,
		  'listKonsultasi' => $listKonsultasi,
		  'listPengetahuan2' => $listPengetahuan2,
		  'idUser' => $idUser
        );
		$this->load->view('dashboard/v_header',$dataHalaman);
		$this->load->view('v_hasil_diagnosa');
		$this->load->view('dashboard/v_footer');
		//echo "beranda";
	}

	
}
