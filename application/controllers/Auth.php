<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


	public function index()
	{
		     $this->load->view('authentication/header');
		     $this->load->view('authentication/contentlogin');
		     $this->load->view('authentication/footer');
	}
}
