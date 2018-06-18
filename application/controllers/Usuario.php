<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('User_model');       
	}

	public function index()
	{
		//Metodo padrao do controller
        // $this->load->view('welcome_message');
        echo 'Tudo OK';
    }
    
    public function novo()
	{              
        if($this->User_model->insert()){
            $this->load->view('userhome');    
        }
        $dados['title'] = "Cadastro de usuário";        
        $this->load->helper('form');
        $this->load->view('newuser',$dados); 
    }

}
