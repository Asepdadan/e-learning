<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashbord extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                // Your own constructor code

                if(!$this->session->userdata('npm')){
                	$this->session->set_flashdata('info_login','Silahkan Login Terlebih Dahulu');
                	redirect('Login');

                }


                
        }


	public function index()
	{
		
		$npm = $this->session->userdata('npm');
		//
		$data['title'] = "E-learning - $npm";
		
		$data['status'] = "dashbord";

		$this->load->view('admin/template/head',$data);
		$this->load->view('admin/template/menu_template',$data);
		$this->load->view('member/dashbord/dashbord');
		$this->load->view('admin/template/footer');

	}

	public function aksi_login(){

		print_r($_POST);

	}

}
