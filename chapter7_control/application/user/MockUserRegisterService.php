<?php
class MockUserRegisterService implements IUserRegisterService{
    private $userRepository;
    private $userService;
    
    function __construct(IUserRepository $userRepository,UserService $userService){ 
        $this->userRepository = $userRepository;
        $this->userService = $userService;
    }
    
    public function handle(UserRegisterCommand $command){
        echo "mock"; 
    }
}
