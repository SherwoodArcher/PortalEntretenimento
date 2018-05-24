<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {

	function __construct(){
                parent::__construct();       
	}

	public function partiurole()
	{
        //Metodo padrao do controller
        $this->load->model('Category_model','category');   
        $data['query'] = $this->category->select(1);
        $data['title'] = "Partiu Rolê - Booom";
        $data['category_name'] = "Partiu Rolê";
        $data['category_description'] = "De graça até injeção na testa";
        $this->load->view('category',$data);  
  
    }

    public function descontracao()
	{
        //Metodo padrao do controller
        $this->load->model('Category_model','category');   
        $data['query'] = $this->category->select(2);        
        $data['title'] = "Descontração - Booom";
        $data['category_name'] = "Descontração";
        $data['category_description'] = "De graça até injeção na testa";
        $this->load->view('category',$data);  
  
    }

    public function emmovimento()
	{
        //Metodo padrao do controller
        $this->load->model('Category_model','category');   
        $data['query'] = $this->category->select(3);
        $data['title'] = "Em Movimento - Booom";
        $data['category_name'] = "Em Movimento";
        $data['category_description'] = "De graça até injeção na testa";
        $this->load->view('category',$data);  
  
    }

    public function nafaixa()
	{
        //Metodo padrao do controller
        $this->load->model('Category_model','category');   
        $data['query'] = $this->category->select(4);
        $data['title'] = "Na Faixa - Booom";
        $data['category_name'] = "Na Faixa";
        $data['category_description'] = "De graça até injeção na testa";
        $this->load->view('category',$data);  
  
    }

    public function geek()
	{
        //Metodo padrao do controller
        $this->load->model('Category_model','category');   
        $data['query'] = $this->category->select(5);
        $data['title'] = "Geek - Booom";
        $data['category_name'] = "Geek";
        $data['category_description'] = "De graça até injeção na testa";
        $this->load->view('category',$data);  
  
    }
    
    public function cultural()
	{
        //Metodo padrao do controller
        $this->load->model('Category_model','category');   
        $data['query'] = $this->category->select(6);
        $data['title'] = "Cultural - Booom";
        $data['category_name'] = "Cultural";
        $data['category_description'] = "De graça até injeção na testa";
        $this->load->view('category',$data);  
  
    }
    
}
