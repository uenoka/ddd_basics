<?php
include('UserId.php');

    class User{
        private $name;
        private $userId;
        function __construct(UserId $userId,string $name){
            $this->userId = $userId;
            $this->changeName($name);
        }
        public function changeName(string $name){
            if ($name==null)throw new Exception();
            if (strlen($name)<3)throw new Exception('ユーザー名は3文字以上です');
            $this->name = $name;
        }
        public function equals(User $other){
            if($other==null)return false;
            if($other->userId===$this->userId) return true;
            return false;
        }
    }
