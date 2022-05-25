<?php

class Reader
{
    private $data;
    
    public function read()
    {
        for ($i = 0; $i < 10; $i++)
        {
            $this->data[$i] = [
                'id' => $i,
                'price' => random_int(1, 10000)
            ];
        }
        
        return $this->data;
    }
}