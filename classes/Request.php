<?php

class Request
{
    public $server;
    public $request;

    public function __construct(array $request, array $server)
    {
        $this->request = $request;
        $this->server = $server;
    }
    
    public function getParameter(string $param)
    {
        try {
            return $this->request[$param];
        } catch (Exception $ex) {
            echo "Исключение: " . $ex->getMessage();
        }
    }
}