<?php

class IdNormalizer
{
    public static function normalise($param): ?int
    {
        if (is_string($param))
        {
            $result = ctype_digit($param);
            
            if ($result){
                return (int) $param;
            }
            
            return null;
        }
    }
}