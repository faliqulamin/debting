

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Debitur extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/aside');
		$this->load->view('debitur/dashboard_v');
		$this->load->view('layout/footer');
	}

}

/* End of file Debitur.php */
/* Location: ./application/controllers/Debitur.php */
