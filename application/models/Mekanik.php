<?php
/**
 * Created by PhpStorm.
 * User: De Gitgit Agitya
 * Date: 6/25/2018
 * Time: 6:27 PM
 */

class Mekanik extends CI_Model{

	public function __construct(){

	}

	function getAll(){

		return $this->db->get('mekanik');
	}
}
