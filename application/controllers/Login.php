<?php

class Login extends CI_Controller{

	function index()
	{
		$this->load->view('header');
		$this->load->view('v_login');
		$this->load->view('footer');
	}

	function verifikasi()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$kasir = $this->Kasir->getAll()->result();

		$sign = false;
		$role = '';

		foreach ($kasir as $value){
			if ($username == $value->username && $password == $value->password)
			{
				$this->session->set_userdata('nama_kasir', $value->nama_kasir);
				$this->session->set_userdata('role', $value->role);
				$this->session->set_userdata('id_kasir', $value->id);
				$this->session->set_userdata('cust', "");

				$sign = true;

				$role = $value->role;
			}
		}

		if ($sign == true) {
			if ($role == 'Kasir') {
				redirect('Beli');
			}
			else{
				redirect('Laporan');
			}
		}

		else{

			$data['warning'] = "Kombinasi Salah";
			$this->load->view('v_login',$data);
		}
	}

	function logout(){
		$this->session->unset_userdata('nama_kasir');
		$this->session->unset_userdata('role');
		$this->session->unset_userdata('id_kasir');

		redirect('Login');
	}
}
