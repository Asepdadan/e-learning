<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_soal extends CI_Model{


		function getSoal($kode_matakuliah){

			$query = $this->db->query("SELECT * FROM tbl_soal where kode_matakuliah = '$kode_matakuliah'  ORDER BY RAND() limit 10 ");//
			return $query->result_array();
		}

		function insert_nilai($tablename,$data){
			$this->db->insert($tablename,$data);

		}

		function getsoalhitung($key_user){

			$query = $this->db->query("select * from tbl_soal where id = '$key_user' ");
			return $query->row_array();

		}
		
}
