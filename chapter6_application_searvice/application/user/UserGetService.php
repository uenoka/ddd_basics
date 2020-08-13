<?php
require_once "application/user/IUserGetService.php";
require_once "UserData.php";
class UserGetService implements IUserGetService{
    private $userRepository;

    function __construct(IUserRepository $userRepository){ 
        $this->userRepository = $userRepository;
    }
    
    public function handle(UserGetCommand $command){
        $target = new UserId($command->getId());
        $user = $this->userRepository->findById($target);
        return new UserData($user);
    }

}