<?php
class UserGetCommand{
    public $name;
    public $id;

    function __construct(String $id){
        $this->id = $id;
    }

    public function getName(){
        return $this->name;
    }

    public function getId(){
        return $this->id;
    }

    public function setName(String $mane){
        $this->name = $name;
    }
}