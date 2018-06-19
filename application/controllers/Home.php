<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->helper('form'); 
		$this->load->library('form_validation');
		$this->load->library('session');              
	}

	public function index()
	{
		$data['title'] = "Boom - Portal de Entretenimento"; 
		$this->load->view('home',$data);
	}
}
