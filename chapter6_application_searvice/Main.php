<?php
require_once "UserApplicationSearvice.php";
require_once "UserRepository.php";
require_once "UserSearvice.php";
require_once "UserUpdateCommand.php";
$userRepository = new UserRepository();
$userSearvice = new UserSearvice($userRepository);
$app = new UserApplicationSearvice($userRepository,$userSearvice);
$app->reguster("tanaka");
$app->get(1234);

$command = new UserUpdateCommand('1234');
$app->update($command);
