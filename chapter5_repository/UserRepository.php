<?php
require "IUserRepository.php";
    class UserRepository implements IUserRepository{
        private $connection;
        public function __construct(){
            $this->connection = "connection";
        }
        public function save(User $user){
            // connection 関連は一旦仮想で作成する
            echo $this->connection . " start\n";
            $userIdStr = $user->getUserId()->toString();
            $userNameStr = $user->getName()->toString();
            $sql = "insert into users values ($userIdStr, $userNameStr);";
            echo $this->connection . " successfully end !" . "\nSQL is :" . $sql;
        }

        public function find(UserName $name){
            echo $this->connection . " start";
            $nameStr = $name->toString();
            $sql = "select * from users where name = $nameStr;";
            echo $this->connection . " successfully end !" . "\nSQL is :" . $sql;
        }
    }