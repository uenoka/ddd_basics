<?php
require_once 'User.php';
require_once 'UserId.php';
require_once 'UserName.php';
require_once 'InMemoryUserRepository.php';
require_once 'UserRepository.php';
require_once 'UserData.php';

class UserGetService{
    private $userRepository;

    function __construct(IUserRepository $userRepository){ 
        $this->userRepository = $userRepository;
    }
    
    public function handle(String $userId){
        $target = new UserId($userId);
        $user = $this->userRepository->findById($target);
        return new UserData($user);
    }

}