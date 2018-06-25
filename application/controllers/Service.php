<?php 
class Service extends CI_Controller {

	function index(){

		$_SESSION['cust'] = "";
		$_SESSION['alamat'] = "";
		$_SESSION['stnk'] = "";
		$_SESSION['merk'] = "";
		$id_transaksi = $this->Transaksi->getIDTrans();
		$this->session->set_userdata('id_transaksi', $id_transaksi);
		$data['pembelian'] = "";
		$data['service'] = "active";
		$data['laporan'] = "";

		$data['referensijasa'] = $this->Jasa->getAll()->result();
		$data['jasa'] = $this->Jasa->getView($_SESSION['id_transaksi'])->result();

		$this->load->view('v_service', $data);
		$this->load->view('footer', $data);
		$this->load->view('navigation', $data);
		$this->load->view('header', $data);
	}

	function open(){

		$data['pembelian'] = "";
		$data['service'] = "active";
		$data['laporan'] = "";

		$data['referensijasa'] = $this->Jasa->getAll()->result();
		$data['jasa'] = $this->Jasa->getView($_SESSION['id_transaksi'])->result();

		$this->load->view('v_service', $data);
		$this->load->view('footer', $data);
		$this->load->view('navigation', $data);
		$this->load->view('header', $data);
	}

	function remove($id){

		$this->Jasa->delete($id);
		$this->open();
	}

	function save(){

		$id = $this->input->post('no_transaksi');
		$tgl = $this->input->post('tanggal');
		$nama = $this->input->post('nama_cust');
		$alamat = $this->input->post('alamat');
		$stnk = $this->input->post('no_stnk');
		$merk = $this->input->post('merk_motor');

		$this->session->set_userdata('cust', $nama);
		$this->session->set_userdata('alamat', $alamat);
		$this->session->set_userdata('stnk', $stnk);
		$this->session->set_userdata('merk', $merk);

		$this->Pelanggan->insert($nama,$alamat,$stnk,$merk);
		$id_pel = $this->Pelanggan->getIDPel();

		$this->Transaksi->insert($id,$_SESSION['id_kasir'],$tgl,$id_pel);
		$this->open();
	}
}
?>
