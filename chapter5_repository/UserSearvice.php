<?php
class UserSearvice{
    private $userRepository;
    function __construct(IUserRepository $userRepository){
        $this->userRepository = $userRepository;
    }
    public function exists(User $user){
        $found = $this->userRepository->findByName($user->getName());
        return $found != null;
    }
}