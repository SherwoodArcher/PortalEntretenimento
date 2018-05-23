<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

    public function select($category_id)
    {
        return $this->db->get_where('mytable', array('id' => $id), $limit, $offset);
        //$this->db->get_where()
    }
}