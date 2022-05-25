<?php

class Response
{
    private $content;
    
    public function setContent($content)
    {
        $this->content = $content;
    }
    
    public function return()
    {
        return $this->content;
    }
    
    public function returnJson()
    {
        return json_encode($this->content);
    }
}