<?php
require_once "application/user/UserRegisterService.php";
require_once "application/user/UserDeleteService.php";
require_once "application/user/UserGetService.php";
require_once "application/user/UserUpdateService.php";
require_once "application/user/UserRegisterService.php";
require_once "UserRegisterCommand.php";
require_once "UserRepository.php";
require_once "UserService.php";
class Main{
    private $userRepository;
    private $userService;
    private $userRegisterService;
    
    function __construct(IUserRepository $userRepository,UserService $userService,IUserRegisterService $registerService){
        $this->userRepository = $userRepository;
        $this->userService = $userService;
        $this->userRegisterService = $registerService;

    }

    function register(String $name){
        $command = new UserRegisterCommand($name);
        $this->userRegisterService->handle($command);
    }

    function update(){
        echo "none";
    }

    function delete(){
        echo "none";
    }

    function get(){
        echo "none";
    }

}
$userRepository = new UserRepository();
$userService = new UserService($userRepository);
$registerService = new UserRegisterService($userRepository,$userService);
$main = new Main($userRepository,$userService,$registerService);
$main->register("test name");

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
