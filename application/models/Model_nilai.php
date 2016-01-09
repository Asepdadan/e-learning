<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_nilai extends CI_Model{


		function getNilai($npm){

			$query = $this->db->query("SELECT `tbl_mahasiswa`.`nama`, `tbl_nilai`.`kode_matakuliah`,`tbl_matakuliah`.`nama_matakuliah`, `tbl_nilai`.`nilai` FROM `tbl_mahasiswa` INNER JOIN 
			`tbl_nilai` ON `tbl_mahasiswa`.`npm` = `tbl_nilai`.`npm` INNER JOIN `tbl_matakuliah`  ON `tbl_matakuliah`.`kode_matakuliah` = `tbl_nilai`.`kode_matakuliah` WHERE `tbl_mahasiswa`.`npm` = $npm");//
			return $query->result_array();
			
		}
		
}
