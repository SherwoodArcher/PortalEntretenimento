<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

    public function select($category_id)
    {
        $sql = "SELECT post_id, post_photos, post_title, post_description FROM Post WHERE post_category = ? ";
        $query = $this->db->query($sql,array($category_id));        
        return $query->result_array();
    }
}