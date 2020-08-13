<?php
require_once "UserDeleteCommand.php";

class DeleteClient{
    private $userDeleteService;
    function __construct(IUserDeleteService $userDeleteService){
        $this->userDeleteService = $userDeleteService;
    }

    function delete(String $id){
        $command = new UserDeleteCommand($id);
        $this->userDeleteService->handle($command);
    }

}
