<?php
interface IUserDeleteService{
    public function handle(UserDeleteCommand $command);
}