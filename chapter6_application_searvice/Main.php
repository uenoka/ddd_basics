<?php
require_once "application/user/UserRegisterSearvice.php";
require_once "application/user/UserDeleteSearvice.php";
require_once "application/user/UserGetSearvice.php";
require_once "application/user/UserUpdateSearvice.php";
require_once "application/user/UserRegisterSearvice.php";
require_once "UserRegisterCommand.php";
require_once "UserRepository.php";
require_once "UserSearvice.php";
class Main{
    private $userRepository;
    private $userSearvice;
    private $userRegisterSearvice;
    
    function __construct(IUserRepository $userRepository,UserSearvice $userSearvice,IUserRegisterSearvice $registerService){
        $this->userRepository = $userRepository;
        $this->userSearvice = $userSearvice;
        $this->userRegisterSearvice = $registerService;

    }

    function register(String $name){
        $command = new UserRegisterCommand($name);
        $this->userRegisterSearvice->handle($command);
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
$userSearvice = new UserSearvice($userRepository);
$registerService = new UserRegisterSearvice($userRepository,$userSearvice);
$main = new Main($userRepository,$userSearvice,$registerService);
$main->register("test name");

// $registerService = new UserRegisterSearvice();
// $registerService->handle("tanaka");

// $getService = new UserGetSearvice($userRepository);
// $registerService->handle(1234);

// $updateService = new UserUpdateSearvice($userRepository,$userSearvice);
// $command = new UserUpdateCommand('1234');
// $updateService->handle($command);

// $deleteService = new UserDeleteSearvice($userRepository);
// $command = new UserUpdateCommand('1234');
// $deleteService->handle($command);
