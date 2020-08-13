<?php
class UserUpdateCommand{
    public $id;
    public $name;

    function __construct(String $id){
        $this->id = $id;
    }

    public function setName(String $name){
        $this->name -> $name;
    }
    public function getName(){
        return $this->name;
    }

    public function getId(){
        return $this->id;
    }

}