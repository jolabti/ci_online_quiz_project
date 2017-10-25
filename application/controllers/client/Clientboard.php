<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientboard extends CI_Controller {


	public function index()
	{
		   $this->load->view('client/header');
		   $this->load->view('client/soal');
		   $this->load->view('client/footer');

	}
}
