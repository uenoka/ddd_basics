<?php
require 'UserId.php';
require 'User.php';
require 'UserSearvice.php';
require 'UserName.php';

$userId = new UserId(1234);
$userName = new UserName('tanaka');
$user = new User($userId,$userName);
$userSearvice = new UserSearvice();
if($userSearvice->exists($user)){
    echo 'ユーザーが存在しています';
}