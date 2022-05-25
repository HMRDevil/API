<?php

class NotFoundException extends ExceptionAbstract
{
    public function __toString(): string
    {
        return $this->message;
    }
}