<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_nilai extends CI_Controller {

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
		
		$data['status'] = "nilai";

		$npm = $this->session->userdata('npm');
		$data['nilai'] = $this->Model_nilai->getNilai($npm);

		$this->load->view('admin/template/head',$data);
		$this->load->view('admin/template/menu_template',$data);
		$this->load->view('member/nilai/cek_nilai',$data);
		$this->load->view('admin/template/footer');

	}

	public function cetak(){
		$npm = $this->session->userdata('npm');
		ob_start();
		$data['nilai'] = $this->Model_nilai->getNilai($npm);
		$this->load->view('member/nilai/print',$data);
		$html = ob_get_contents();
		ob_get_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('P','A4','en');
		$pdf->WriteHTML($html);
		$pdf->Output('Data Nilai.pdf', 'R');
	}

	

}
