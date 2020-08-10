<?php
    calss UserRepository implements IUserRepository{
        private $connection = 'connection';
        public function save(User $user){
            // connection 関連は一旦仮想で作成する
            echo $connection . ' start';
            $sql = 'insert into users values ($user->userId, $user->name)';
            echo $connection . ' successfully end !';
        }

        public function find(UserName $name){}
    }