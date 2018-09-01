<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class M_admin extends CI_Model {

		function getData($table,$where){		
			return $this->db->get_where($table,$where);
		}

		function insertData($table,$where){
			$this->db->insert($table,$where);
		}
		
		

		
}
?>
