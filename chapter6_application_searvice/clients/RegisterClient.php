<?php

class RegisterClient{
    private $userRegisterService;
    function __construct(IUserRegisterService $registerService){
        $this->userRegisterService = $registerService;
    }

    function register(String $name){
        $command = new UserRegisterCommand($name);
        $this->userRegisterService->handle($command);
    }

}
