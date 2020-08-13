<?php
require 'UserId.php';
require 'User.php';
require 'UserService.php';
require 'UserName.php';

class Main{
    public function createUser(String $id ,String $userName){
        $user = new User(new UserId($id), new UserName($userName));
        $userService = new UserService();
        if($userService->exists($user)){
            throw new Excetion('ユーザーが存在しています');
        }
        // ここから具体的なSQL書いたりの処理が続く

    }
}
