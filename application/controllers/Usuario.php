<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	function __construct(){
        parent::__construct();       
	}

	public function index()
	{
		//Metodo padrao do controller
        // $this->load->view('welcome_message');
        echo 'Tudo OK';
    }
    
    public function novo()
	{		
        $dados['title'] = "Cadastro de usuário";
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('Nome');
        $this->load->view('newuser',$dados);        
    }
    
}
