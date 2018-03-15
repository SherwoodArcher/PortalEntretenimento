<?php

class Category {

    private $category_id;
    private $category_level;
    private $category_name;
    private $category_description;
    private $category_status;

    public function getCategory_Id(){
        return $this->category_id;
    }

    public function setCategory_Id($category_id){
        $this->category_id = $category_id;
        return $this;
    }

    public function getCategory_Level(){
        return $this->category_level;
    }

    public function setCategory_Level($category_level){
        $this->category_level = $category_level;
        return $this;
    }

    public function getCategory_Name(){
        return $this->category_name;
    }
  
    public function setCategory_Name($category_name){
        $this->category_name = $category_name;
        return $this;
    }

    public function getCategory_Description(){
        return $this->category_description;
    }

    public function setCategory_Description($category_description){
        $this->category_description = $category_description;
        return $this;
    }

    public function getCategory_Status(){
        return $this->category_status;
    }

    public function setCategory_Status($category_status){
        $this->category_status = $category_status;
        return $this;
    }
}

?>