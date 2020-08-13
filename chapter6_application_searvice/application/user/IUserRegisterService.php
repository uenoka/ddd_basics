<?php
interface IUserRegisterService{
    public function handle(UserRegisterCommand $command);
}