<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$data['title'] = "E-learning - Profile";
		$data['user'] = "Admin";
		$data['status'] = "dashbord";


		$this->load->view('admin/template/head',$data);
		$this->load->view('admin/template/menu_template');
		$this->load->view('member/profile/profile');
		$this->load->view('admin/template/footer');

	}

	

}
