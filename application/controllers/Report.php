<?php
// class Report extends CI_Controller {
// 	public function pdf(){

// 	    $this->load->library('pdf');

// 	    $this->pdf->setPaper('A4', 'landscape');
// 	    $this->pdf->filename = "struk.pdf";
// 	    $this->pdf->load_view('v_cetak');


// 	}
// }
?>

<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Report extends CI_Controller {
 
	public function pdf()
	{
		$this->load->library('pdf');
 		
	    $this->pdf->setPaper('A4', 'landscape');

	    $this->pdf->load_view('v_cetak');
	}
}
 ?>