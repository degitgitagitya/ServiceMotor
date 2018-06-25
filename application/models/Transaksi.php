<?php
/**
 * Created by PhpStorm.
 * User: De Gitgit Agitya
 * Date: 6/25/2018
 * Time: 7:09 AM
 */

class Transaksi extends CI_Model {

	public function __construct()
	{

	}

	public function getIDTrans(){

		$trans = $this->db->query("Select * From transaksifinal ORDER by id_transaksi DESC LIMIT 1")->result();
		$str = $trans[0]->id_transaksi;
		$str2 = explode("-",$str);
		$temp = (int)$str2[1];
		$temp++;
		$str2[1] = (string)$temp;
		$value = $str2[0] ."-". $str2[1];
		return $value;
	}

	public function insert($id_transaksi, $id_kasir, $tanggal ,$id_pel){

		$data = array(
			'id_transaksi' => $id_transaksi,
			'id_kasir' => $id_kasir,
			'tanggal_transaksi' => $tanggal,
			'id_pelanggan' => $id_pel,
			'harga_total' => 0
		);

		$this->db->insert('transaksifinal', $data);
	}

	public function update($total){

		$this->db->set('harga_total', $total);
		$this->db->where('id_transaksi', $_SESSION['id_transaksi']);
		$this->db->update('transaksifinal');
	}

}
