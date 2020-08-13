<?php

class DeleteClient{
    private $userRepository;
    private $userService;
    private $userRegisterService;
    private $userUpdateService;
    function __construct(IUserRepository $userRepository,UserService $userService,IUserRegisterService $registerService){
        $this->userRepository = $userRepository;
        $this->userService = $userService;
        $this->userRegisterService = $registerService;
    }

    function register(String $name){
        $command = new UserRegisterCommand($name);
        $this->userRegisterService->handle($command);
    }

    function update(String $id){
        $command = new UserUpdateCommand($id);
        $this->userUpdateService->handle($command);
    }

    function delete(){
        echo "none";
    }

    function get(){
        echo "none";
    }

}
