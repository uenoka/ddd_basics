<?php
    interface IUserRepository{
        function save(User $user);
        function find(UserName $name);
    }