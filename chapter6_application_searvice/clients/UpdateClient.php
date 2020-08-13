<?php
require_once "UserUpdateCommand.php";
class UpdateClient{
    private $userUpdateService;
    function __construct(IUserUpdateService $userUpdateService){
        $this->userUpdateService = $userUpdateService;
    }

    function update(String $id){
        $command = new UserUpdateCommand($id);
        $this->userUpdateService->handle($command);
    }
}

