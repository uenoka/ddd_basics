<?php 
interface IUserGetService{
    public function handle(UserGetCommand $command);
}