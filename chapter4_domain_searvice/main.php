<?php
require '../chapter3_entity/User.php';
require '../chapter3_entity/UserId.php';
require 'UserSearvice.php';

$userId = new UserId(1234);
$user = new User($userId,"tanaka taro");
$userSearvice = new UserSearvice();
if($userSearvice->exists($user)){
    echo 'ユーザーが存在しています';
}