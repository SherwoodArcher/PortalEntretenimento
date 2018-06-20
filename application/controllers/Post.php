<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

	function __construct(){
                parent::__construct();
                $this->load->helper('form');     
                $this->load->library('form_validation');
                $this->load->library('session');                    
	}

	public function index()
	{                  
                $this->load->model('post_model','post'); 
                echo $this->uri->segment(3);   
                $data['query'] = $this->post->select($post_id);
                $data['title'] = "";
                //var_dump($data);        
                //$this->load->view('post',$data);    
        }

        public function novo(){
                $logado = $this->session->userdata('user_id');
                if($logado == NULL){
                        echo '<script type="text/javascript">alert("Você não está logado! Redirecionando para a página principal"); window.location = "/"; </script>';
                }
                $config = array(
                    array(
                        'field' => 'titulo',
                        'rules' => 'required|trim|min_length[3]'
                    ),
                    array(
                        'field' => 'foto',
                        'rules' => 'required|trim|min_length[3]'                    
                    ),
                    array(
                        'field' => 'descricao',
                        'rules' => 'required|trim|min_length[3]'
                    ),
                    array(
                        'field' => 'categoria',
                        'rules' => 'required|trim|numeric|max_length[1]'
                    )
                );  
                $this->form_validation->set_rules($config);
                if ($this->form_validation->run() === FALSE){
                    $dados['title'] = "Cadastro de post";        
                    $this->load->view('newpost',$dados); 
                } else{
                        $this->load->model('post_model','post'); 
                        $this->post->insert();
                        echo '<script type="text/javascript">alert("O post foi cadastrado! Redirecionando para a página principal")</script>';
                        $this->load->view('index');                
                }
        }


}