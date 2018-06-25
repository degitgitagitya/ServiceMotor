<?php 
class Beli extends CI_Controller {
	public function index()
	{
		$_SESSION['cust'] = "";
		$_SESSION['alamat'] = "";
		$_SESSION['stnk'] = "";
		$_SESSION['merk'] = "";
		$id_transaksi = $this->Transaksi->getIDTrans();
		$this->session->set_userdata('id_transaksi', $id_transaksi);
		$data['pembelian'] = "active";
		$data['service'] = "";
		$data['laporan'] = "";

		$data['referensipart'] = $this->Part->getAll()->result();
		$data['part'] = $this->Part->getView($_SESSION['id_transaksi'])->result();

		$this->load->view('v_beli', $data);
		$this->load->view('footer', $data);
		$this->load->view('navigation', $data);
		$this->load->view('header', $data);
	}

	public function open(){

		$data['pembelian'] = "active";
		$data['service'] = "";
		$data['laporan'] = "";

		$data['referensipart'] = $this->Part->getAll()->result();
		$data['part'] = $this->Part->getView($_SESSION['id_transaksi'])->result();

		$this->load->view('v_beli', $data);
		$this->load->view('footer', $data);
		$this->load->view('navigation', $data);
		$this->load->view('header', $data);
	}

	function add(){

		$id_referensi = $this->input->post('id_part');
		$quantity = $this->input->post('qty');
		$this->Part->insert($id_referensi,$_SESSION['id_transaksi'],$quantity);
		$this->open();
	}

	function remove($id){

		$this->Part->delete($id);
		$this->open();
	}

	function save(){

		$id = $this->input->post('no_transaksi');
		$tgl = $this->input->post('tanggal');
		$nama = $this->input->post('nama_cust');

		$this->session->set_userdata('cust', $nama);

		$alamat = "";
		$stnk = "";
		$merk = "";
		$this->Pelanggan->insert($nama,$alamat,$stnk,$merk);
		$id_pel = $this->Pelanggan->getIDPel();

		$this->Transaksi->insert($id,$_SESSION['id_kasir'],$tgl,$id_pel,"-");
		$this->open();
	}
}
?>
