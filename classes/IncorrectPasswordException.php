<?php

class IncorrectPasswordException extends ExceptionAbstract
{
    public function __toString(): string
    {
        return $this->message;
    }
}