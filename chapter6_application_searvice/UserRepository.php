<?php
require_once "IUserRepository.php";
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

        public function findByName(UserName $name){
            echo $this->connection . " start\n";
            $nameStr = $name->toString();
            $sql = "select * from users where name = $nameStr;\n";
            echo $this->connection . " successfully end !" . "\nSQL is :" . $sql;
            return null;
        }
        
        public function delete(UserId $id){
            echo $this->connection . " start\n";
            echo "deleting user";
            $sql = "delete from users where id = $id;\n";
            echo $this->connection . " successfully end !" . "\nSQL is :" . $sql;
        }

        public function findById(UserId $id){
            echo $this->connection . " start\n";
            echo "searching user\n";
            $idstr=$id->toString();
            $sql = "select * from users where id = $idstr;\n";
            echo $this->connection . " successfully end !" . "\nSQL is :" . $sql;
        }
    }