<?php 
interface IUserUpdateService{
    public function handle(UserUpdateCommand $command);
}