<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data['title'] = "E-learning";

		$this->load->view('admin/template/head',$data);
		$this->load->view('admin/template/menu');
		$this->load->view('admin/template/login');
		$this->load->view('admin/template/footer');

	}

	public function aksi_login(){
	
		$npm = $this->input->post('npm');
		$pass = md5($this->input->post('pass'));
		

		$query = $this->Model_login->getLogin($npm,$pass);

			

		
		if($query){
			if($query[0]['level'] == 'admin'){
				$session = array('npm' => $npm, 'pass'=> $pass, 'login' => TRUE);
			$this->session->set_userdata($session);
				redirect('Dashbord');
			}else{

			$session = array('npm' => $npm, 'pass'=> $pass, 'login' => TRUE);
			$this->session->set_userdata($session);
			redirect('member/M_dashbord');	
			}



		}else{
			$this->session->set_flashdata('info_login','Npm atau Password anda Salah !!');
			redirect('Login');
		}



	}

	public function logout(){
	date_default_timezone_set("Asia/jakarta");
	$micro_date = microtime();
	$date_array = explode(" ",$micro_date);
	$date = date("YmdHis",$date_array[1]);
	

		$waktu_terakhir = date("Y-m-d h:i:s");

		$npm = $this->session->userdata('npm');
		//update waktu awal login
		$waktu_login = $this->Model_login->outwaktu($waktu_terakhir,$npm);
		//fungsi logout
	$this->session->sess_destroy();
	redirect();

	}

}
