<?php

class Comment {

    private $comment_id;
    private $comment_post_id;
    private $comment_user_id;
    private $comment_comment_id;
    private $comment_description;

    public function getComment_Id(){
        return $this->comment_id;
    }

    public function setComment_Id($comment_id)    {
        $this->comment_id = $comment_id;
        return $this;
    }

    public function getComment_Post_Id(){
        return $this->comment_post_id;
    }

    public function setComment_Post_Id($comment_post_id){
        $this->comment_post_id = $comment_post_id;
        return $this;
    }

    public function getComment_User_Id(){
        return $this->comment_user_id;
    }

    public function setComment_User_Id($comment_user_id){
        $this->comment_user_id = $comment_user_id;
        return $this;
    }

    public function getComment_Comment_Id(){
        return $this->comment_comment_id;
    }

    public function setComment_Comment_Id($comment_comment_id){
        $this->comment_comment_id = $comment_comment_id;
        return $this;
    }

    public function getComment_Description(){
        return $this->comment_description;
    }

    public function setComment_Description($comment_description){
        $this->comment_description = $comment_description;
        return $this;
    }
}

?>