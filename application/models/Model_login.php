<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model{


		function getLogin($npm,$pass){

			$query = $this->db->query("SELECT * FROM tbl_mahasiswa where npm = $npm and pass = '$pass' ");//
			return $query->result_array();
			
		}
		function inwaktu($waktu_awal,$npm){
			$this->db->query("UPDATE login SET waktu_awal = '$waktu_awal' WHERE npm = $npm;");
		}

		function outwaktu($waktu_terakhir,$npm){
		$this->db->query("UPDATE login SET waktu_terakhir = '$waktu_terakhir' WHERE npm = $npm;");	
		}
}
