<?php 
class Laporan extends CI_Controller {
	public function index()
	{
		$data['pembelian'] = "";
		$data['service'] = "";
		$data['laporan'] = "active";

		$this->load->view('v_laporan');
		$this->load->view('header', $data);
	}
}
?>