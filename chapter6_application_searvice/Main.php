<?php
require_once "application/user/UserRegisterService.php";
require_once "application/user/UserDeleteService.php";
require_once "application/user/UserGetService.php";
require_once "application/user/UserUpdateService.php";
require_once "application/user/UserRegisterService.php";
require_once "clients/RegisterClient.php";
require_once "clients/UpdateClient.php";
require_once "clients/GetClient.php";
require_once "clients/DeleteClient.php";
require_once "UserRegisterCommand.php";
require_once "UserRepository.php";
require_once "UserService.php";

echo "\n==========Register start==========\n";
$userRepository = new UserRepository();
$userService = new UserService($userRepository);
$registerService = new UserRegisterService($userRepository,$userService);
$registerClient = new RegisterClient($registerService);
$registerClient->register("test name");


echo "\n==========Update start==========\n";
$updateService = new UserUpdateService($userRepository,$userService);
$updateClient = new UpdateClient($updateService);
$updateClient->update("1234");


echo "\n==========Get start==========\n";
$getService = new UserGetService($userRepository);
$getClient = new GetClient($getService);
$getClient->get("1234");



// $registerService = new UserRegisterService();
// $registerService->handle("tanaka");

// $getService = new UserGetService($userRepository);
// $registerService->handle(1234);

// $updateService = new UserUpdateService($userRepository,$userService);
// $command = new UserUpdateCommand('1234');
// $updateService->handle($command);

// $deleteService = new UserDeleteService($userRepository);
// $command = new UserUpdateCommand('1234');
// $deleteService->handle($command);
