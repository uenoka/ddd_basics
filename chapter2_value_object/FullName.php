<?php
    class FullName{
        private $firstName;
        private $lastName;
        function __construct(String $firstName,String $lastName){
            echo "start";
            $this->firstName=$firstName;
            $this->lastName=$lastName;
        }
        public function getFirstName(){
            return $this->firstName;
        }
        public function getLastName(){
            return $this->lastName;
        }
    }

$name = new FullName("taro","tanaka");
var_dump($name->getFirstName());
var_dump($name->getLastName());
