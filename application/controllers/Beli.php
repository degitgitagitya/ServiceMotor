<?php 
class Beli extends CI_Controller {
	public function index()
	{
		$data['pembelian'] = "active";
		$data['service'] = "";
		$data['laporan'] = "";

		$data['referensipart'] = $this->Part->getAll()->result();
		// $data['part'] = $this->Part->getView($_SESSION['id_transaksi'])->result();

		$this->load->view('v_beli', $data);
		$this->load->view('header', $data);
	}
	function add(){

		$id_referensi = $this->input->post('id_part');
		// $quantity = $this->input->post('qty');
		// $this->Part_M->insert($id_referensi,$_SESSION['id_transaksi'],$quantity);
		// $this->index();
		echo $id_referensi;
	}

	function remove($id){

		$this->Part_M->delete($id);
		$this->index();
	}
}
?>