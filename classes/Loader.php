<?php

class Loader
{
    private $reader;
    
    public function __construct(Reader $reader)
    {
        $this->reader = $reader;
    }
    
    public function get()
    {
        return $this->reader->read();
    }
}