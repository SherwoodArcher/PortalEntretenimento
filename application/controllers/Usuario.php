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
        $this->load->library('form_validation');
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
                        'required' => 'Você precisa digitar um %s.',
                ),
            ),
            array(
                'field' => 'cep',
                'label' => 'Cep da residência do usuário',
                'rules' => 'required|trim|regex_match[/^[0-9]{5}-[0-9]{3}$/]',
                'errors' => array(
                        'required' => 'Você precisa digitar um %s.',
                    ),
            ),
            array(
                'field' => 'rua',
                'label' => 'Rua',
                'rules' => 'required|trim|max_length[50]'
            ),
            array(
                'field' => 'numero',
                'label' => 'Numero',
                'rules' => 'required|trim|numeric|max_length[4]'
            ),
            array(
                'field' => 'complemento',
                'label' => 'Complemento',
                'rules' => 'required|trim|max_length[50]'
            ),
            array(
                'field' => 'bairro',
                'label' => 'Bairro',
                'rules' => 'required|trim|max_length[50]'
            ),
            array(
                'field' => 'cidade',
                'label' => 'Cidade',
                'rules' => 'required|trim|max_length[30]|min_length[3]'
            ),
            array(
                'field' => 'estado',
                'label' => 'Estado',
                'rules' => 'required|trim|max_length[25]|min_length[2]'
            ),
            array(
                'field' => 'dtnasc',
                'label' => 'Data de nascimento',
                'rules' => 'required|trim',
            ),
            array(
                'field' => 'senha',
                'label' => 'Senha',
                'rules' => 'required|min_length[8]'
            ),
            array(
                'field' => 'confirmeSenha',
                'label' => 'Confirme sua senha',
                'rules' => 'required|min_length[8]'
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|trim|valid_email'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() === FALSE){
            $dados['title'] = "Cadastro de usuário";        
            $this->load->helper('form');
            $this->load->view('newuser',$dados); 
        } else{
            $this->User_model->insert();
            $this->load->view('userhome');                
        }            
    }

}
