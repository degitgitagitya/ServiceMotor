<?php
/**
 * Created by PhpStorm.
 * User: De Gitgit Agitya
 * Date: 6/25/2018
 * Time: 9:13 AM
 */

class Pelanggan extends CI_Model{

	public function __construct(){

	}

	public function insert($nama,$alamat,$stnk,$merk){

		$data = array(
			'nama_pelanggan' => $nama,
			'alamat' => $alamat,
			'stnk' => $stnk,
			'merk_motor' => $merk
		);

		$this->db->insert('pelanggan', $data);
	}

	public function getIDPel(){

		$trans = $this->db->query("Select * From pelanggan ORDER by id DESC LIMIT 1")->result();
		return $trans[0]->id;
	}

}
