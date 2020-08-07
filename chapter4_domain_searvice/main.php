<?php
include('../chapter3_entity/User.php');
include('../chapter3_entity/UserId.php');
include('UserSearvice.php');

$userId = new UserId(1234);
$user = new User($userId,"tanaka taro");
$userSearvice = new UserSearvice();
if($userSearvice->exists($user)){
    echo 'ユーザーが存在しています';
}