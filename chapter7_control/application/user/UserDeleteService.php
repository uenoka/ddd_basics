<?php
require_once "IUserDeleteService.php";
class UserDeleteService implements IUserDeleteService{
    private $userRepository;

    function __construct(IUserRepository $userRepository){ 
        $this->userRepository = $userRepository;
    }
    public function handle($command){
        $targetId = new UserId($command->getId());
        $user = $this->userRepository->findById($targetId);
        if($user == null){
            echo "user not found";
            return;
        }
        $this->userRepository->delete($user);
    }
}