<?php
require 'UserId.php';
require 'User.php';
require 'UserSearvice.php';
require 'UserName.php';

class Main{
    private $userRepository;
    function __construct(IUserRepository $userRepository){
        $this->userRepository = $userRepository;
    }

    public function createUser(String $id ,String $userName){
        $user = new User(new UserId($id), new UserName($userName));
        $userSearvice = new UserSearvice($this->$userRepository);
        if($userSearvice->exists($user)){
            throw new Excetion('ユーザーが存在しています');
        }
        $userRepository.save($user);
    }
}
