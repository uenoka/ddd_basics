<?php
require_once 'User.php';
require_once 'UserId.php';
require_once 'UserName.php';
require_once 'UserSearvice.php';
require_once 'InMemoryUserRepository.php';
require_once 'UserRepository.php';

class UserUpdateSearvice{
    private $userRepository;
    private $userSearvice;
    function __construct(IUserRepository $userRepository,UserSearvice $userSearvice){ 
        $this->userRepository = $userRepository;
        $this->userSearvice = $userSearvice;
    }
    public function handle(UserUpdateCommand $command){
        $targetId = new UserId($command->getId());
        $user = $this->userRepository->findById($targetId);
        if($user==null){
            echo "cannot find user";
            return ;
        }
        $name = $command->getName();
        if($name!=null){
            $newUserName = new UserName($name);
            $user.changeName($newUserName);
            if($this->userSearvice->exists($user)){
                echo "user already exists";
                return;
            }
        $this->userRepository->save($user);
        }
    }   
}