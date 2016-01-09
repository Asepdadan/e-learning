<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_soal extends CI_Controller {

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
		$data['status'] = "soal";
		

		$this->load->view('admin/template/head',$data);
		$this->load->view('admin/template/menu_template',$data);
		$this->load->view('member/soal/soal');
		$this->load->view('admin/template/footer');


		


	}

	public function aksi(){
		
		$benar = 0;
		$salah = 0;

		if(empty($_POST)){
			$this->session->set_flashdata('info',"<div class='alert alert-info'>
                                              <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                              <strong>Warning!</strong> <h3>Anda belum memilih jawaban !!! </h3>
                                            </div>");
			redirect('member/M_soal');
		}else{

			//$kode = $this->db->query("select kode_soal from tbl_soal");

			$no = 1;

			foreach ($_POST as $key_user => $value) {//deteksi user menjawab
				
				$kunci = $this->Model_soal->getsoalhitung($key_user);
				 	//echo $kunci[0]['jawaban_benar']." jawaban user". $value;echo "<br>";
				//print_r($kunci);
				if($kunci['jawaban_benar'] == $value){

					 $benar++;

				}else{
					$salah++;
				}

				$no++;



			}//end foreach			

		$npm = $this->session->userdata('npm');
		$kode_matakuliah = $this->input->post('kodematakuliah');
		$nilai = ($benar * 10 )	;
		$insert = array(
			'id'=>'',
			'npm'=> $npm,
			'kode_matakuliah' => $kode_matakuliah,
			'nilai' => $nilai
			);
		$query = $this->Model_soal->insert_nilai('tbl_nilai',$insert);
		
		$sess = array('kode_matakuliah','ujian');
		$this->session->unset_userdata($sess);
		redirect('member/M_dashbord');

		}//end else
		

//			echo "jawaban yang anda jawab benar berjumlah ".$benar;echo "<br>";
//		echo "jawaban yang anda jawab salah berjumlah ".$salah;

	}


	public function test(){


	}


}
