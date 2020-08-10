<?php
require 'UserRepository.php';
require 'User.php';
require 'UserId.php';
require 'UserName.php';
require 'UserSearvice.php';
class Main{
    private $userRepository;
    function __construct(IUserRepository $userRepository){
        $this->userRepository = $userRepository;
    }

    public function createUser(String $id ,String $userName){
        $user = new User(new UserId($id), new UserName($userName));
        $userSearvice = new UserSearvice($this->userRepository);
        if($userSearvice->exists($user)){
            throw new Excetion('ユーザーが存在しています');
        }
        $this->userRepository->save($user);
    }
}


$userRepository = new UserRepository();
$program = new Main($userRepository);
$program->createUser('1234','tanaka');