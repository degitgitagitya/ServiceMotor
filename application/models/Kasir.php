<?php 
class Kasir extends CI_Model {

	function __construct(){

	}

	function getAll(){

		return $this->db->get('kasir');
	}
}
 ?>
