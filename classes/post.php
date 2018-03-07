<?php

class Post {

    private $post_id;
    private $post_title;
    private $post_creator;
    private $post_date_time;
    private $post_photos;
    private $post_operating_hours_start;
    private $post_operating_hours_end;
    private $post_days_of_operation;
    private $post_price;
    private $post_tags;
    private $post_description;
    private $post_category;
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

    public function getPost_Creator(){
        return $this->post_creator;
    }

    public function setPost_Creator($post_creator){
        $this->post_creator = $post_creator;
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
