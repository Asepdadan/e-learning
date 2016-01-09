<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashbord extends CI_Controller {

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
		$data['title'] = "E-learning - Dashbord";
		$data['user'] = "User member";
		$data['status'] = "dashbord";

		$this->load->view('admin/template/head',$data);
		$this->load->view('admin/template/menu_admin');
		$this->load->view('admin/dashbord/dashbord');
		$this->load->view('admin/template/footer');

	}

	public function aksi_login(){

		print_r($_POST);

	}

}
