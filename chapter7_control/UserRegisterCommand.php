<?php
class UserRegisterCommand{
    public $name;

    function __construct(String $name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

}