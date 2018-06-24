<?php 
class Service extends CI_Controller {
	public function index()
	{
		$data['pembelian'] = "";
		$data['service'] = "active";
		$data['laporan'] = "";

		$data['referensijasa'] = $this->Jasa->getAll()->result();

		$this->load->view('v_service', $data);
		$this->load->view('header', $data);
	}
}
?>