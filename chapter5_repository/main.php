<?php
//require 'UserRepository.php';
require 'User.php';
require 'UserId.php';
require 'UserName.php';
require 'UserSearvice.php';
require 'InMemoryUserRepository.php';
class Main{
    private $userRepository;
    function __construct(IUserRepository $userRepository){
        $this->userRepository = $userRepository;
    }

    public function createUser(String $id ,String $userName){
        $user = new User(new UserId($id), new UserName($userName));
        $userSearvice = new UserSearvice($this->userRepository);
        if($userSearvice->exists($user)){
            echo "ユーザーが存在しています\nユーザーを作成できませんでした。\n\n";
        }
        else{
            $this->userRepository->save($user);
        }
    }
    public function deleteUser(String $id ,String $userName){
        $user = new User(new UserId($id), new UserName($userName));
        $userSearvice = new UserSearvice($this->userRepository);
        if($userSearvice->exists($user)){
            $this->userRepository->delete($user->getUserId());
        }
        else{
            echo "ユーザーは存在しません、ユーザー削除を終了します\n";
        }
    }
}



$userRepository = new InMemoryUserRepository();
$program = new Main($userRepository);
$program->createUser('1234','tanaka');
$program->createUser('2345','tanaka');
$program->deleteUser('2345','tanaka');
