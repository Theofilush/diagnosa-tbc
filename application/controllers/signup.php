<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class signup extends CI_Controller {
	function __construct(){
		parent::__construct();
	
	}
	public function index()
	{
		$this->load->view('v_sign_up');
		if($this->session->userdata('status') == "login"){
			redirect(site_url("beranda"));
		}
	}

	 	function add_user(){		
			if($this->input->post('btnDaftar') == "Daftar"){									
				$username = $this->input->post('username', TRUE);
				$nama_lengkap = $this->input->post('nama_lengkap', TRUE);
				$password = $this->input->post('password', TRUE);
				$data = array(
					'username' =>  $username,
					'nama_lengkap' =>  $nama_lengkap,
					'password' => md5($password),
					'author' => 'pasien'
				);       
				$query= $this->M_login->addUser($data);
				if ($query) {
					redirect(site_url('login'));
				}
				else{
					redirect(site_url('login'));
				}
			}	
		}
}
