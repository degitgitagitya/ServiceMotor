<?php 
class Log extends CI_Controller {
	public function index()
	{
		$data['transaksi'] = $this->Transaksi->getView()->result();
		
		$data['log'] = "active";
		$data['laporan'] = "";

		$this->load->view('v_log', $data);
		$this->load->view('footer', $data);
		$this->load->view('navigation', $data);
		$this->load->view('header', $data);
	}

	function add($id){

		$this->Jasa->insert($id, $_SESSION['id_trans']);
		$detail = $this->Jasa->getDetail($id)->result();

		foreach ($detail as $value){

			$this->Part->insert($value->id_part,$_SESSION['id_trans'],1);
		}

		$this->detail($_SESSION['id_trans']);
	}

	function add_parts(){

		$id_referensi = $this->input->post('id_part');
		$quantity = $this->input->post('qty');
		$this->Part->insert($id_referensi,$_SESSION['id_trans'],$quantity);
		$this->detail($_SESSION['id_trans']);
	}

	function update($jumlah){

		$this->Transaksi->update($jumlah);
		$this->index();

	}

	function remove($id){

		$temp = $this->Jasa->getRefById($id)->result();

		$detail = $this->Jasa->getDetail($temp[0]->id_referensi_jasa)->result();

		$this->Jasa->delete($id);

		foreach ($detail as $value){

			$this->Part->deleteByPart($value->id_part, $_SESSION['id_trans']);
		}

		$this->detail($_SESSION['id_trans']);
	}

	function remove_parts($id){

		$this->Part->delete($id);
		$this->detail($_SESSION['id_trans']);
	}

	public function detail($id){

		$_SESSION['id_trans'] = $id;
		
		$data['pembelian'] = "";
		$data['service'] = "";
		$data['laporan'] = "active";
		$data['log'] = "";

		$data['referensijasa'] = $this->Jasa->getAll()->result();
		$data['jasa'] = $this->Jasa->getView($_SESSION['id_transaksi'])->result();

		$data['referensipart'] = $this->Part->getAll()->result();
		$data['part'] = $this->Part->getView($_SESSION['id_transaksi'])->result();

		$data['iden_id'] = $this->Transaksi->getIden($id)->result();
		$data['jasa_id'] = $this->Transaksi->getService($id)->result();
		$data['part_id'] = $this->Transaksi->getParts($id)->result();

		$this->load->view('v_log_detail', $data);
		$this->load->view('v_modal_service_detail', $data);
		$this->load->view('v_modal_parts_detail', $data);
		$this->load->view('navigation', $data);
		$this->load->view('header', $data);
		$this->load->view('footer', $data);
	}
}
?>
