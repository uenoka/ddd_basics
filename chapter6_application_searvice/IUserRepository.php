<?php
    interface IUserRepository{
        function save(User $user);
        function findByName(UserName $name);
        function findById(UserId $id);
        function delete(UserId $id);
    }