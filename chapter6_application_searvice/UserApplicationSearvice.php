<?php
require_once 'User.php';
require_once 'UserId.php';
require_once 'UserName.php';
require_once 'UserSearvice.php';
require_once 'InMemoryUserRepository.php';
require_once 'UserRepository.php';
require_once 'UserData.php';

    class UserApplicationSearvice{
        private $userRepository;
        private $userSearvice;

        function __construct(IUserRepository $userRepository,UserSearvice $userSearvice){ 
            $this->userRepository = $userRepository;
            $this->userSearvice = $userSearvice;
        }

        public function reguster(String $name){
            $user = new User(new UserId(1234),new UserName($name));
            if($this->userSearvice->exists($user)){
                echo "User is already exists";
            }else{
                $this->userRepository->save($user);
            }
        }

        public function get(String $userId){
            $target = new UserId($userId);
            $user = $this->userRepository->findById($target);
            return new UserData($user);
        }

        public function update(UserUpdateCommand $command){
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

        public function delete(){
            $targetId = new UserId($command->getId());
            $user = $this->userRepository->findById($targetId);
            if($suer == null){
                echo "user not found";
                return;
            }
            $this->userRepository->delete($user);

        }
    }
