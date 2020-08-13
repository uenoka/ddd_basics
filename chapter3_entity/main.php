<?php
require 'User.php';
//require 'UserId.php';
//require 'UserService.php';
$userId = new UserId(1234);
$user = new User($userId,"tanaka taro");
var_dump($user);