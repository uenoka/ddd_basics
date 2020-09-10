<?php
    class User{
        private $name;
        private $userId;

        function __construct(UserId $userId,UserName $name){
            $this->userId = $userId;
            $this->changeName($name);
        }

        public function changeName(UserName $name){
            $this->name = $name;
        }

        public function equals(User $other){
            if($other==null)return false;
            if($other->userId===$this->userId) return true;
            return false;
        }

        public function getName(){
            return $this->name;
        }

        public function getUserId(){
            return $this->userId;
        }
    }
