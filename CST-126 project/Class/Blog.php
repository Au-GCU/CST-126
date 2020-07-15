<?php


class Blog {
    
    private $id;
    private $date;
    private $title;
    private $post;
    
    function __construct($id, $date, $title, $post) {
        $this->id = $id;
        $this->date = $date;
        $this->title = $title;
        $this->post = $post;
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getDate()
    {
        return $this->date;
    }
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public function getPost()
    {
        return $this->post;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function setDate($date)
    {
        $this->date = $date;
    }
    
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    public function setPost($post)
    {
        $this->post = $post;
    }
}
?>