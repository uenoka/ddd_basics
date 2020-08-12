<?php
require_once "application/user/UserRegisterSearvice.php";
require_once "application/user/UserDeleteSearvice.php";
require_once "application/user/UserGetSearvice.php";
require_once "application/user/UserUpdateSearvice.php";
require_once "UserRepository.php";
require_once "UserSearvice.php";
require_once "UserUpdateCommand.php";
class Main{
    private $userRepository;
    private $userSearvice;
    private $userRegisterSearvice;
    
    function __construct($userRepository,$userSearvice){
        $this->userRepository = $userRepository;
        $this->userSearvice = $userSearvice;
    }
    
    function register(IUserRegisterSearvice $searvice){
        $this->$userRegisterSearvice = $searvice;
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
