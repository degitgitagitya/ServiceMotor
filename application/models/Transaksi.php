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

	public function getAll(){
		return $this->db->get('transaksifinal');
	}

	public function getView(){
		$result = $this->db->query("SELECT transaksifinal.id_transaksi, transaksifinal.tanggal_transaksi, pelanggan.nama_pelanggan, transaksifinal.harga_total FROM transaksifinal, pelanggan WHERE transaksifinal.id_pelanggan = pelanggan.id;");

		return $result;
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

	public function insert($id_transaksi, $id_kasir, $tanggal ,$id_pel,$mekanik){

		$data = array(
			'id_transaksi' => $id_transaksi,
			'id_kasir' => $id_kasir,
			'tanggal_transaksi' => $tanggal,
			'id_pelanggan' => $id_pel,
			'nama_mekanik' => $mekanik,
			'harga_total' => 0
		);

		$this->db->insert('transaksifinal', $data);
	}


	public function update($total, $session){

		$this->db->set('harga_total', $total);
		$this->db->where('id_transaksi', $session);
		$this->db->update('transaksifinal');
	}

	public function getIden($id){
		$result = $this->db->query("SELECT transaksifinal.id_transaksi, tanggal_transaksi, nama_pelanggan, alamat, stnk, merk_motor, nama_kasir, nama_mekanik FROM transaksifinal, pelanggan, kasir, mekanik WHERE pelanggan.id = transaksifinal.id_pelanggan AND mekanik.nama = transaksifinal.nama_mekanik AND kasir.id = transaksifinal.id_kasir AND transaksifinal.id_transaksi = '".$id."';");

		return $result;
	}

	public function getService($id){
		$result = $this->db->query("SELECT referensijasa.id, transaksifinal.id_transaksi, transaksijasa.id, kategori, harga_jasa from transaksifinal, transaksijasa, referensijasa WHERE transaksifinal.id_transaksi = transaksijasa.id_transaksi AND transaksijasa.id_referensi_jasa = referensijasa.id AND transaksifinal.id_transaksi = '".$id."';");

		return $result;
	}

	public function getParts($id){
		$result = $this->db->query("SELECT transaksifinal.id_transaksi, transaksipart.id, nama_part, harga_part, quantity from transaksifinal, transaksipart, referensipart WHERE transaksifinal.id_transaksi = transaksipart.id_transaksi AND transaksipart.id_referensi_part = referensipart.id AND transaksifinal.id_transaksi = '".$id."';");

		return $result;
	}
}
