<?php

class Api
{
    private $loader;
    private $catalog;
    
    public function __construct(Loader $loader)
    {
        $this->loader = $loader;
        $this->catalog = $this->loader->get();
    }
    
    public function find($id): ?array
    {
        if (is_null($id))
        {
            return $this->catalog;
        }
        
        if (is_string($id))
        {
            $normalised_id = IdNormalizer::normalise($id);
        }
        
        if (is_null($normalised_id))
        {
            echo new IncorrectIdFormatException("Incorrect Id format");
            exit();
        }
        
        $result = current(array_filter($this->catalog, function($key) use ($normalised_id){
            return ($key['id'] === $normalised_id);
        }));
        
        if (!$result) {
            echo new NotFoundException("Id not found");
            exit();
        }
        
        return $result;
    }
}