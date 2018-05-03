<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		//Metodo padrao do controller
		// $this->load->view('welcome_message');
	}
}
