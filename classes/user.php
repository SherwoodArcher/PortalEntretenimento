<?php

class User {

    private $user_id;
    private $user_name;
    private $user_nickname;
    private $user_cpf;
    private $user_birth_date;
    private $user_sex;
    private $user_cep;
    private $user_email;
    private $user_password;
    private $user_access;
    private $user_preferences;


    public function getUser_id(){
        return $this->user_id;
    }
   
    public function setUser_id($user_id){
        $this->user_id = $user_id;
        return $this;
    }

    public function getUser_name(){
        return $this->user_name;
    }
   
    public function setUser_name($user_name){
        $this->user_name = $user_name;
        return $this;
    }

    public function getUser_nickname(){
        return $this->user_nickname;
    }

    public function setUser_nickname($user_nickname){
        $this->user_nickname = $user_nickname;
        return $this;
    }

    public function getUser_cpf(){
        return $this->user_cpf;
    }

    public function setUser_cpf($user_cpf){
        $this->user_cpf = $user_cpf;
        return $this;
    }
    
    public function getUser_birth_date(){
        return $this->user_birth_date;
    }

    public function setUser_birth_date($user_birth_date){
        $this->user_birth_date = $user_birth_date;
        return $this;
    }

    public function getUser_sex(){
        return $this->user_sex;
    }

    public function setUser_sex($user_sex){
        $this->user_sex = $user_sex;
        return $this;
    }

    public function getUser_cep(){
        return $this->user_cep;
    }

    public function setUser_cep($user_cep){
        $this->user_cep = $user_cep;
        return $this;
    }

    public function getUser_email(){
        return $this->user_email;
    }
   
    public function setUser_email($user_email){
        $this->user_email = $user_email;
        return $this;
    }

    public function getUser_password(){
        return $this->user_password;
    }

    public function setUser_password($user_password){
        $this->user_password = $user_password;
        return $this;
    }

    public function getUser_access(){
        return $this->user_access;
    }

    public function setUser_access($user_access){
        $this->user_access = $user_access;
        return $this;
    }  

}