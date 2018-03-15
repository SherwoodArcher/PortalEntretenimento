<?php

class User {

    private $user_id;
    private $user_name;
    private $user_nickname;
    private $user_avatar;
    private $user_cpf;
    private $user_birth_date;
    private $user_sex;
    private $user_cep;
    private $user_address_details;
    private $user_email;
    private $user_password;
    private $user_access;
    private $user_preferences;
    private $user_favorite_posts;
    private $user_status;


    public function getUser_Id(){
        return $this->user_id;
    }
   
    public function setUser_Id($user_id){
        $this->user_id = $user_id;
        return $this;
    }

    public function getUser_Name(){
        return $this->user_name;
    }
   
    public function setUser_Name($user_name){
        $this->user_name = $user_name;
        return $this;
    }

    public function getUser_Nickname(){
        return $this->user_nickname;
    }

    public function setUser_Nickname($user_nickname){
        $this->user_nickname = $user_nickname;
        return $this;
    }

    public function getUser_Avatar(){
        return $this->user_avatar;
    }

    public function setUser_Avatar($user_avatar){
        $this->user_avatar = $user_avatar;
        return $this;
    }

    public function getUser_Cpf(){
        return $this->user_cpf;
    }

    public function setUser_Cpf($user_cpf){
        $this->user_cpf = $user_cpf;
        return $this;
    }
    
    public function getUser_Birth_Date(){
        return $this->user_birth_date;
    }

    public function setUser_Birth_Bate($user_birth_date){
        $this->user_birth_date = $user_birth_date;
        return $this;
    }

    public function getUser_Sex(){
        return $this->user_sex;
    }

    public function setUser_Sex($user_sex){
        $this->user_sex = $user_sex;
        return $this;
    }

    public function getUser_Cep(){
        return $this->user_cep;
    }

    public function setUser_Cep($user_cep){
        $this->user_cep = $user_cep;
        return $this;
    }

    public function getUser_Adress_Details(){
        return $this->user_address_details;
    }

    public function setUser_Adress_Details($user_address_details){
        $this->user_address_details = $user_address_details;
        return $this;
    }

    public function getUser_Email(){
        return $this->user_email;
    }
   
    public function setUser_Email($user_email){
        $this->user_email = $user_email;
        return $this;
    }

    public function getUser_Password(){
        return $this->user_password;
    }

    public function setUser_Password($user_password){
        $this->user_password = $user_password;
        return $this;
    }

    public function getUser_Access(){
        return $this->user_access;
    }

    public function setUser_Access($user_access){
        $this->user_access = $user_access;
        return $this;
    }  

    public function getUser_Favorite_Posts(){
        return $this->user_favorite_posts;
    }

    public function setUser_Favorite_Posts($user_favorite_posts){
        $this->user_favorite_posts = $user_favorite_posts;
        return $this;
    }

    public function getUser_status(){
        return $this->user_status;
    }

    public function setUser_status($user_status)    {
        $this->user_status = $user_status;
        return $this;
    }
}