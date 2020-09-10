<?php
require_once 'User.php';
require_once 'UserId.php';
require_once 'UserName.php';
require_once 'UserService.php';
require_once "IUserRegisterService.php";
require_once 'UserRepository.php';
class UserRegisterService implements IUserRegisterService{
        private $userRepository;
        private $userService;
        
        function __construct(IUserRepository $userRepository,UserService $userService){ 
            $this->userRepository = $userRepository;
            $this->userService = $userService;
        }
        
        public function handle(UserRegisterCommand $command){
            $user = new User(new UserId(1234),new UserName($command->getName()));
            if($this->userService->exists($user)){
                echo "User is already exists";
            }else{
                $this->userRepository->save($user);
            }
        }
}