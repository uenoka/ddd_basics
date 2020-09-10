<?php
    class UserData{
        public $id;
        public $name;
        function __constract(User $source){
            $this->id = $source->getId();
            $this->name = $source->getName();
        }
        public function getId(){
            return $this->id;
        }
        public function getName(){
            return $this->name;
        }
    }