<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') == "login"){
			redirect(site_url("beranda"));
		}
	}
	public function index()
	{
		$this->load->view('v_login');
	}

	function aksi_login(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$where = array(
				'username' => $username,
				'password' => md5($password)
				);
			$cek = $this->M_login->cek_login("t_users",$where)->num_rows();
			if($cek > 0){
	 
				$data_session = array(
					'username' => $username,
					'nama_lengkap' => $nama_lengkap,
					'status' => "login"
					);
	 
				$this->session->set_userdata($data_session);
	 
				redirect(base_url("beranda"));
	 
			}else{
				echo "Username dan password salah !";
			}
		}
		function logout(){
			$this->session->sess_destroy();
			redirect(base_url('login'));
		}
}
