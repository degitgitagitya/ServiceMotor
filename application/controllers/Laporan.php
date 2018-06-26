<?php 
class Laporan extends CI_Controller {
	public function index()
	{
		$data['pembelian'] = "";
		$data['service'] = "";
		$data['laporan'] = "active";
		$data['log'] = "";
<<<<<<< HEAD

		$this->load->view('header', $data);
		$this->load->view('v_laporan');
		$this->load->view('navigation');
		$this->load->view('footer');
	}

	public function detail($id){
		$_SESSION['id_trans'] = $id;
		
		$data['pembelian'] = "";
		$data['service'] = "";
		$data['laporan'] = "active";
		$data['log'] = "";
=======
>>>>>>> bef7d4e2c73b8a24cc2ccf30f4348abf1fd42e92

		$this->load->view('header', $data);
		$this->load->view('v_laporan');
		$this->load->view('navigation');
		$this->load->view('footer');
	}
}
?>
