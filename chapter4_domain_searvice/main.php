<?php
require 'UserId.php';
require 'User.php';
require 'UserSearvice.php';
require 'UserName.php';

class Main{
    public function createUser(String $id ,String $userName){
        $user = new User(new UserId($id), new UserName($userName));
        $userSearvice = new UserSearvice();
        if($userSearvice->exists($user)){
            throw new Excetion('ユーザーが存在しています');
        }
        // ここから具体的なSQL書いたりの処理が続く

    }
}
