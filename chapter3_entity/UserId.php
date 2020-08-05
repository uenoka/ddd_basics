<?php

class UserId{
    private $value;
    function __construct(string $value){
        if($value==null)throw new Exception();
        $this->value = $value;
    }
}
