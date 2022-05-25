<?php

class Kernel
{
    private $request;
    private $response;
    private $autorizator;
    private $api;
    private $user;
    private $responseContentFormatter;

    public function __construct($request, $server)
    {
        $this->request = new Request($request, $server);
        $this->response = new Response();
        $this->autorizator = new BasicAuthorizator();
        $this->api = new Api(new Loader(new Reader()));
        $this->user = new User('Ivan', 'Mezinov');
        $this->responseContentFormatter = new ResponceContentFormatter($this->request, $this->response);
    }
    
    public function run()
    {
        $this->autorizator::auth($this->request, $this->user);
        $this->response->setContent($this->api->find($this->request->getParameter('id')));
        
        return print_r($this->responseContentFormatter->format());
    }
}