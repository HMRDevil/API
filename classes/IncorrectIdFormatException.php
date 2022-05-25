<?php

class IncorrectIdFormatException extends ExceptionAbstract
{
    public function __toString(): string
    {
        return $this->message;
    }
}