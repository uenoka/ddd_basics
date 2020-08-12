<?php
class UserService{
    private $userRepository;
    function __construct(IUserRepository $userRepository){
        $this->userRepository = $userRepository;
    }
    public function exists(User $user){
        $found = $this->userRepository->findByName($user->getName());
        return $found != null;
    }
}