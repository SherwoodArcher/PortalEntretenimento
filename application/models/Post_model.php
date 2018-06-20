<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {

    public function insert()
    {
        $data = array(
            'post_title' => $this->input->post('nome'),
            'post_user_id' => $this->session->user_id,  
            'post_date_time' => NOW(),  
            'post_photos' => $this->input->post('foto'),  
            'post_description' => $this->input->post('descricao'),  
            'post_category' => $this->input->post('category')         
        );       
        return $this->db->insert('Post', $data);
    }

    public function select($post_id){
        $sql = "SELECT post_title, post_photos, post_description FROM Post WHERE post_id = ? ";
        $query = $this->db->query($sql,array($post_id));        
        return $query->result_array();
    }
}