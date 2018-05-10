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
        $config = array(
            array(
                    'field' => 'nome',
                    'label' => 'Nome do Usuário',
                    'rules' => 'required|trim|min_length[3]'
            ),
            array(
                    'field' => 'cpf',
                    'label' => 'CPF do usuário',
                    'rules' => 'required|trim|regex_match[/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}$/]',
                    'errors' => array(
                            'required' => 'You must provide a %s.',
                    ),
            ),
            array(
                    'field' => 'passconf',
                    'label' => 'Password Confirmation',
                    'rules' => 'required'
            ),
            array(
                    'field' => 'email',
                    'label' => 'Email',
                    'rules' => 'required'
            )
    );
    
    $this->form_validation->set_rules($config);




        $dados['title'] = "Cadastro de usuário";
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('Nome');
        $this->load->view('newuser',$dados);  
        
        

    }
    




}
