<?php

class Jasa extends CI_Model{

	function __construct(){

	}

	function getAll(){

		return $this->db->get('referensijasa');
	}

	function getRefById($id){

		$this->db->where('id',$id);
		return $this->db->get('transaksijasa');
	}

	function getView($id){

		$result = $this->db->query("SELECT transaksijasa.id, referensijasa.kategori,referensijasa.harga_jasa FROM transaksijasa, referensijasa WHERE transaksijasa.id_referensi_jasa = referensijasa.id AND transaksijasa.id_transaksi = '". $id ."';");

		$total = 0;

		$hasil = $result->result();

		foreach ($hasil as $value){

			$total = $total + $value->harga_jasa;
		}

		$this->Transaksi->update($total);

		return $result;
	}

	function insert($id_referensi_jasa, $id_transaksi){

		$data = array(
			'id_referensi_jasa' => $id_referensi_jasa,
			'id_transaksi' => $id_transaksi
		);

		$this->db->insert('transaksijasa', $data);
	}

	function delete($id_transaksi_jasa){

		$this->db->where('id', $id_transaksi_jasa);
		$this->db->delete('transaksijasa');
	}

	function getDetail($id){

		$this->db->where('id_jasa',$id);
		return $this->db->get('referensijasa_detail');
	}
}
