<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->helper('form');  
        $this->load->library('form_validation');    
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
                'rules' => 'required|trim|regex_match[/^[0-9]{11}$/]',
                'errors' => array(
                        'required' => 'Você precisa digitar um %s.',
                ),
            ),
            array(
                'field' => 'cep',
                'label' => 'Cep da residência do usuário',
                'rules' => 'required|trim|regex_match[/^[0-9]{8}$/]',
                'errors' => array(
                        'required' => 'Você precisa digitar um %s.',
                    ),
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
            echo '<script type="text/javascript">alert("Você se cadastrou")</script>';
            $this->load->view('index');                
        }            
    }

    public function login(){
        $this->load->library('form_validation');
        $config = array(        
            array(
                'field' => 'email_l',
                'label' => 'Email',
                'rules' => 'required|trim|valid_email'
            ),
            array(
                'field' => 'senha_l',
                'label' => 'Senha',
                'rules' => 'required|min_length[8]'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() === FALSE){
            
        } else{
            $select = $this->User_model->select();
            //var_dump($select);
            if($select['user_password'] == $this->input->post('senha_l')){
                $_SESSION['user_id'] = $select['user_id'];
                echo '<script type="text/javascript">alert("Você está logado(a), e será redirecionado para a página principal"); window.location = "index.php/Home/";</script>';
            }else{
                echo '<script type="text/javascript">alert("Dados incorretos, por favor tente novamente. Você será redirecionado para a página principal"); window.location = "index.php/Home/";</script>';
            }               
        }
    }

}
