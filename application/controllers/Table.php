<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table extends CI_Controller {

	//Validating login
	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('uid'))
		redirect('signin');
	}
	
	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('table');
		$this->load->view('layout/footer');
	}
}