<?php

class User
{
    public $name;
    public $password;
    
    public function __construct(string $name, ?string $password)
    {
        $this->name = $name;
        $this->password = $password;
    }
}