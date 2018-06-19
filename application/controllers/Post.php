<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

	function __construct(){
        parent::__construct();    
        $this->load->library('form'); 
        $this->load->library('form_validation');       
	}

	public function post($post_id = null)
	{
        //Metodo padrao do controller
        $this->load->model('post_model','post');   
        $data['query'] = $this->post->select($post_id);
        $data['title'] = $data['query']['post_title'];        
        $this->load->view('post',$data);    
    }