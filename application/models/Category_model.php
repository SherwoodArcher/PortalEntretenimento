<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

    public function select($category_id)
    {
        $this->db->select('post_photos, post_title, post_description');
        $this->db->from('Post');
        $this->db->where('post_category',$category_id);
        $query = $this->db->get();
        
        return $query;
        //$this->db->get_where()
    }
}