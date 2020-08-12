<?php
require_once 'User.php';
require_once 'UserId.php';
require_once 'UserName.php';
require_once 'UserSearvice.php';
require_once "IUserRegisterSearvice.php";
require_once 'UserRepository.php';
class UserRegisterSearvice implements IUserRegisterSearvice{
        private $userRepository;
        private $userSearvice;
        
        function __construct(IUserRepository $userRepository,UserSearvice $userSearvice){ 
            $this->userRepository = $userRepository;
            $this->userSearvice = $userSearvice;
        }
        
        public function handle(UserRegisterCommand $command){
            $user = new User(new UserId(1234),new UserName($command->getName()));
            if($this->userSearvice->exists($user)){
                echo "User is already exists";
            }else{
                $this->userRepository->save($user);
            }
        }
}