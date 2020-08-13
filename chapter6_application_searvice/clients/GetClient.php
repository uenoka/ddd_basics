<?php
require_once "UserGetCommand.php";
class GetClient{
    private $userGetService;
    function __construct(IUserGetService $getService){
        $this->userGetService = $getService;
    }

    function get(String $id){
        $command = new UserGetCommand($id);
        $this->userGetService->handle($command);
    }

}