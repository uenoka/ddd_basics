<?php
require 'IUserRepository.php';
    class InMemoryUserRepository implements IUserRepository{
        public $store = array();
        public function findByName(UserName $name){
            $result = in_array($name->toString(),$this->store);
            if($result){
                echo "found user\n";
                return $result;
            }
            echo "not found user\n";
            return null;
        }
        public function save(User $user){
            echo "creating user\n";
            $this->store[$user->getUserId()->toString()] = $user->getName()->toString();
            echo "successfully create user\n";
            var_dump($this->store);
        }

        public function delete(UserId $id){
            unset($this->store[$id->toString()]);
            var_dump($this->store);
        }
        public function findById(UserId $id){
            return array_key_exists($id->toString(),$this->store);
        }
        
    }