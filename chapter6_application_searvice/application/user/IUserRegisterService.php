<?php 
require_once "UserUpdateCommand.php";
interface IUserRegisterService{
    public function handle(UserRegisterCommand $command);
}