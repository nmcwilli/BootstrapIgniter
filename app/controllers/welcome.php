<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('welcome');
		$this->load->view('templates/footer');
	}
}
/* End of Controller */
/* Location: ./app/controllers/welcome.php */