<?php
class comment{
    private $comment_id=NULL;
    private $user_id=NULL;
    private $article_title=NULL;
    private $name=NULL;
    private $text=NULL;
    private $datecreation=NULL;

    function __construct($comment_id,$article_title,$user_id,$name,$text,$datecreation)
    {
       $this->comment_id = $comment_id;
       $this->article_title = $article_title;
       $this->user_id = $user_id;
       $this->name = $name;
       $this->text = $text;
       $this->datecreation = $datecreation; 
    }
    function getCommentId(){
        return $this->comment_id;
    }
    function getArticleid(){
        return $this->article_title;
    }
    function getText(){
        return $this->text;
    }
    function getName(){
        return $this->name;
    }
    function getDatec(){
        return $this->datecreation;
    }
    function getUserid(){
        return $this->user_id;
    }
    function setCommentId(int $id){
        $this->comment_id = $id;
    }
    function setArticleId(int $id){
        $this->article_title = $id;
    }
    function setUserId(int $id){
        $this->user_id = $id;
    }
    function setText(string $t){
        $this->text = $t;
    }
    function setName(string $t){
        $this->name = $t;
    }
    function setDate(string $datecreation){
        $this->datecreation = $datecreation;
    }
}
?>