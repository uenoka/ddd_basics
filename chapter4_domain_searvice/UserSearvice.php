<?php
class UserSearvice{
    public function exists(User $user){
        // SQL で存在するかどうかを確認する処理
        // select id from users where id = $user->id; で存在すればTrueを返す
        return true;
    }
}