<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function insert()
    {
        $data = array(
            'user_name' => $this->input->post('nome'),
            'user_cpf' => $this->input->post('cpf'),  
            'user_birth_date' => $this->input->post('dtnasc'),  
            'user_sex' => $this->input->post('sexo'),  
            'user_cep' => $this->input->post('cep'),  
            'user_address_details' => $this->input->post('numero').",".$this->input->post('complemento'),  
            'user_email' => $this->input->post('email'),  
            'user_password' => $this->input->post('senha'),  
            'user_access' => 1,  
            'user_preferences' => null,
            'user_status' => 1              
        );       
        return $this->db->insert('Usuario', $data);
    }
}