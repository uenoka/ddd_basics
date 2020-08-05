<?php
    class User{
        private $name;
        
        function __construct(string $name){
            $this->changeName($name);
        }

        public function setUserId(string $value){
            if($value==null)throw new Exception();
            $this->value = $value;
        }

        public function changeName(string $name){
            if ($name==null)throw new Exception();
            if (strlen($name)<3)throw new Exception('ユーザー名は3文字以上です');
            $this->name = $name;
        }
    }


$user = new User([123,234]);
var_dump($user);