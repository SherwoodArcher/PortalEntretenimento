<?php

class Post {

    private $post_id;
    private $post_title;
    private $post_user_id;
    private $post_date_time;
    private $post_photos;
    private $post_operating_hours_start;
    private $post_operating_hours_end;
    private $post_days_of_operation;
    private $post_event_date_start;
    private $post_event_date_end;
    private $post_cep;
    private $post_address_details;
    private $post_price;
    private $post_tags;
    private $post_description;
    private $post_category;
    //Site, Facebook, Instagram, Twitter
    private $post_references;
    private $post_rating;
    private $post_status;
    private $post_status_reason;

    public function getPost_Id(){
        return $this->post_id;
    }

    public function setPost_Id($post_id){
        $this->post_id = $post_id;
        return $this;
    }

    public function getPost_Title(){
        return $this->post_title;
    }

    public function setPost_Title($post_title){
        $this->post_title = $post_title;
        return $this;
    }

    public function getPost_User_Id(){
        return $this->post_user_id;
    }

    public function setPost_User_Id($post_user_id){
        $this->post_user_id = $post_user_id;
        return $this;
    }

    public function getPost_Date_Time(){
        return $this->post_date_time;
    }

    public function setPost_Date_Time($post_date_time){
        $this->post_date_time = $post_date_time;
        return $this;
    }

    public function getPost_Photos(){
        return $this->post_photos;
    }

    public function setPost_Photos($post_photos){
        $this->post_photos = $post_photos;
        return $this;
    }
    
    public function getPost_Operating_Hours_Start(){
        return $this->post_operating_hours_start;
    }

    public function setPost_Operating_Hours_Start($post_operating_hours_start){
        $this->post_operating_hours_start = $post_operating_hours_start;
        return $this;
    }
   
    public function getPost_Operating_Hours_End(){
        return $this->post_operating_hours_end;
    }

    public function setPost_Operating_Hours_End($post_operating_hours_end){
        $this->post_operating_hours_end = $post_operating_hours_end;
        return $this;
    }
    
    public function getPost_Days_Of_Operation(){
        return $this->post_days_of_operation;
    }
    
    public function setPost_Days_Of_Operation($post_days_of_operation){
        $this->post_days_of_operation = $post_days_of_operation;
        return $this;
    }

    public function getPost_Event_Date_Start(){
        return $this->post_event_date_start;
    }

    public function setPost_Event_Date_Start($post_event_date_start){
        $this->post_event_date_start = $post_event_date_start;
        return $this;
    }

    public function getPost_Event_Date_End(){
        return $this->post_event_date_end;
    }
    public function setPost_Event_Date_End($post_event_date_end){
        $this->post_event_date_end = $post_event_date_end;
        return $this;
    }
      
    public function getPost_Cep(){
        return $this->post_cep;
    }

    public function setPost_Cep($post_cep){
        $this->post_cep = $post_cep;
        return $this;
    }

    public function getPost_Adress_Details(){
        return $this->post_address_details;
    }

    public function setPost_Adress_Details($post_address_details){
        $this->post_address_details = $post_address_details;
        return $this;
    }

    public function getPost_Price(){
        return $this->post_price;
    }

    public function setPost_Price($post_price){
        $this->post_price = $post_price;
        return $this;
    }

    public function getPost_Tags(){
        return $this->post_tags;
    }

    public function setPost_Tags($post_tags){
        $this->post_tags = $post_tags;
        return $this;
    }

    public function getPost_Description(){
        return $this->post_description;
    }

    public function setPost_Description($post_description){
        $this->post_description = $post_description;
        return $this;
    }

    public function getPost_Category(){
        return $this->post_category;
    }

    public function setPost_Category($post_category){
        $this->post_category = $post_category;
        return $this;
    }
    
    public function getPost_References(){
        return $this->post_references;
    }

    public function setPost_References($post_references){
        $this->post_references = $post_references;
        return $this;
    }

    public function getPost_Rating(){
        return $this->post_rating;
    }

    public function setPost_Rating($post_rating){
        $this->post_rating = $post_rating;
        return $this;
    }
    
    public function getPost_Status(){
        return $this->post_status;
    }

    public function setPost_Status($post_status){
        $this->post_status = $post_status;
        return $this;
    }
    
    public function getPost_Status_Reason(){
        return $this->post_status_reason;
    }

    public function setPost_Status_Reason($post_status_reason){
        $this->post_status_reason = $post_status_reason;
        return $this;
    }
}

?>
