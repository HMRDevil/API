<?php

class ResponceContentFormatter
{
    private $request;
    private $response;
    private $formats;
    private $format;

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
        $this->formats = [
            0 => null,
            1 => 'array',
            2 => 'json'
        ];
        $this->format = $this->request->getParameter('format');
    }
    
    public function format()
    {
        switch ($this->format) {
            case null:
            case 'array':
                return $this->response->return();
                break;
            case 'json':
                return $this->response->returnJson();
                break;
            default:
                echo new InvalidFormatException("Invalid format");
                exit();
        }
    }
}