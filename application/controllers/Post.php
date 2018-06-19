<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

	function __construct(){
                parent::__construct();
                $this->load->helper('form');     
                $this->load->library('form_validation');       
	}

	public function index($post_id = null)
	{
                $this->load->model('post_model','post');   
                $data['query'] = $this->post->select($post_id);
                $data['title'] = $data['query']['post_title'];        
                $this->load->view('post',$data);    
        }

        public function novo(){
                if(!isset($_SESSION["user_id"])){
                        echo '<script type="text/javascript">alert("Você não está logado! Redirecionando para a página principal"); window.location = "/"; </script>';
                }
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


}