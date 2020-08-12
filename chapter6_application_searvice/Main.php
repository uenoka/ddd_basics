<?php
require_once "application/user/UserRegisterSearvice.php";
require_once "application/user/UserDeleteSearvice.php";
require_once "application/user/UserGetSearvice.php";
require_once "application/user/UserUpdateSearvice.php";
require_once "UserRepository.php";
require_once "UserSearvice.php";
require_once "UserUpdateCommand.php";

$userRepository = new UserRepository();
$userSearvice = new UserSearvice($userRepository);

$registerService = new UserRegisterSearvice($userRepository,$userSearvice);
$registerService->handle("tanaka");

$getService = new UserGetSearvice($userRepository);
$registerService->handle(1234);

$updateService = new UserUpdateSearvice($userRepository,$userSearvice);
$command = new UserUpdateCommand('1234');
$updateService->handle($command);

$deleteService = new UserDeleteSearvice($userRepository);
$command = new UserUpdateCommand('1234');
$deleteService->handle($command);
