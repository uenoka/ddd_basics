<?php
require_once 'User.php';
require_once 'UserId.php';
require_once 'UserName.php';
require_once 'UserRepository.php';
require_once 'UserData.php';

class UserDeleteSearvice{
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