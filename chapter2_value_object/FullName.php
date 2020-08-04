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
        public function equals(FullName $other){
            if ($other->getFirstName()===$this->firstName && 
            $other->getLastName()===$this->lastName){
                return True;
            }
            return False;
        }
    }

$name1 = new FullName("taro","tanaka");
$name2 = new FullName("taro","takagi");
var_dump($name1->equals($name2));

