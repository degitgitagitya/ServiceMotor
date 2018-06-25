<?php

class Part extends CI_Model{

	function __construct(){

	}

	function getAll(){

		return $this->db->get('referensipart');
	}

	function getView($id){

		$result = $this->db->query("SELECT transaksipart.id, referensipart.nama_part,referensipart.harga_part,transaksipart.quantity FROM transaksipart, referensipart WHERE transaksipart.id_referensi_part = referensipart.id AND transaksipart.id_transaksi = '". $id ."';");

		$total = 0;

		$hasil = $result->result();

		foreach ($hasil as $value){

			$total = $total + $value->harga_part * $value->quantity;
		}

		$this->Transaksi->update($total);

		return $result;
	}

	function insert($id_referensi_part, $id_transaksi,$quantity){

		$data = array(
			'id_referensi_part' => $id_referensi_part,
			'id_transaksi' => $id_transaksi,
			'quantity' => $quantity
		);

		$this->db->insert('transaksipart', $data);
	}

	function delete($id_transaksi_part){

		$this->db->where('id', $id_transaksi_part);
		$this->db->delete('transaksipart');
	}
	
}
