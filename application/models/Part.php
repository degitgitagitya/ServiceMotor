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

		$this->db->where('id',$id_referensi_part);
		$temp = $this->db->get('referensipart')->result();

		$stok = $temp[0]->stok - $quantity;

		$this->db->set('stok',$stok);
		$this->db->where('id',$id_referensi_part);
		$this->db->update('referensipart');

		$data = array(
			'id_referensi_part' => $id_referensi_part,
			'id_transaksi' => $id_transaksi,
			'quantity' => $quantity
		);

		$this->db->insert('transaksipart', $data);
	}

	function delete($id_transaksi_part){

		$this->db->where('id',$id_transaksi_part);
		$temp = $this->db->get('transaksipart')->result();

		$qty = $temp[0]->quantity;

		$this->db->where('id',$temp[0]->id_referensi_part);
		$tmp = $this->db->get('referensipart')->result();

		$stok = $tmp[0]->stok + $qty;

		$this->db->set('stok',$stok);
		$this->db->where('id',$temp[0]->id_referensi_part);
		$this->db->update('referensipart');

		$this->db->where('id', $id_transaksi_part);
		$this->db->delete('transaksipart');
	}

	function deleteByPart($id){

		$this->db->where('id_referensi_part', $id);
		$this->db->where('id_transaksi', $_SESSION['id_transaksi']);
		$temp = $this->db->get('transaksipart')->result();

		$qty = 0;

		foreach ($temp as $value){

			$qty = $qty + $value->quantity;
		}

		$this->db->where('id',$temp[0]->id_referensi_part);
		$tmp = $this->db->get('referensipart')->result();

		$stok = $tmp[0]->stok + $qty;

		$this->db->set('stok',$stok);
		$this->db->where('id',$temp[0]->id_referensi_part);
		$this->db->update('referensipart');

		$this->db->where('id_referensi_part', $id);
		$this->db->where('id_transaksi', $_SESSION['id_transaksi']);
		$this->db->delete('transaksipart');
	}
	
}
