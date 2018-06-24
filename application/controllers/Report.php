<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Report extends CI_Controller {
 
	public function pdf()
	{
		$this->load->library('pdfgenerator');
 
		$data['users']=array(
			array(
				'firstname'=>'Agung',
				'lastname'=>'Setiawan',
				'email'=>'ag@setiawan.com'
			)
		);
 
	    $html = $this->load->view('v_cetak', $data, true);

	    $this->pdfgenerator->generate($html,'contoh');
	}
}