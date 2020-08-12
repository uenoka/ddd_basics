<?php 
require_once "UserUpdateCommand.php";
interface IUserRegisterSearvice{
    public function handle(UserRegisterCommand $command);
}