<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {

	function __construct(){
                parent::__construct();       
	}

	public function nafaixa()
	{
        //Metodo padrao do controller
        $this->load->model('Category_model','category');   
        $data['query'] = $this->category->select(3);
        echo $data['query'];
        
        //$this->load->view('category',$data);   
        
        //$sql = "SELECT post_id, post_title, post_description, post_photos FROM Post WHERE post_category = :post_category";
    }
    
   
    
}
