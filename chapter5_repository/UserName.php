<?php
    class UserName{
        private $value;
        function __construct(String $value){
            $this->value=$value;
        }
        public function getValue(){
            return $this->value;
        }
        public function equals(UserName $other){
            if ($other->getValue()===$this->value){
                return True;
            }
            return False;
        }
        public function toString(){
            return $this->value;
        }
    }

