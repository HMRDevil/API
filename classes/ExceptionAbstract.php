<?php

abstract class ExceptionAbstract extends Exception
{
    public function __toString(): string
    {
        return $this->message;
    }
}