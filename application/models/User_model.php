<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

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
            'user_password' => $this->input->post('senha')          
        );       
        return $this->db->insert('Usuario', $data);
    }

    public function select(){       
        $sql = "SELECT user_id, user_password FROM Usuario WHERE user_email = ?";
        $query = $this->db->query($sql,array($this->input->post('email_l')));        
        return $query->row();
    }
}