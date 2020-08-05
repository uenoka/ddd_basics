<?php
include('UserId.php');

    class User{
        private $name;
        private $userId;
        function __construct(UserId $userId,string $name){
            $this->changeName($name);
        }
        public function changeName(string $name){
            if ($name==null)throw new Exception();
            if (strlen($name)<3)throw new Exception('ユーザー名は3文字以上です');
            $this->name = $name;
        }
    }

$userId = new UserId(1234);
$user = new User($userId,"tanaka taro");
var_dump($user);