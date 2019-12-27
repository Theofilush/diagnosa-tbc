<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	function __construct(){
		parent::__construct();
	
	}
	public function index()
	{
		$this->load->view('v_login');
		if($this->session->userdata('status') == "login"){
			redirect(site_url("beranda"));
		}
	}

	function aksi_login(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$where = array(
				'username' => $username,
				'password' => md5($password)
				);
			$cek = $this->M_login->cek_login("t_users",$where)->num_rows();
			$ceko = $this->M_login->cek_logina("t_users",$where);
			foreach ($ceko as $array => $row){ $idUser = $row->id_user; } 
			//echo $ceko;			
			if($cek > 0){
	 
				$data_session = array(
					'id_user' => $idUser,
					'username' => $username,
					'nama_lengkap' => $nama_lengkap,
					'status' => "login"
					);
	 
				$this->session->set_userdata($data_session);
				$this->session->set_userdata('aaa',$data_session);
	 
				redirect(base_url("beranda"));
	 
			}else{
				echo "Username dan password salah !";
			}
		}
		function logout(){
			$this->session->sess_destroy();
			redirect(site_url('signup'));
		}
}
