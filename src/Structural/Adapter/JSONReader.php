<?php

namespace App\Structural\Adapter;

class JSONReader implements IJSONReader
{
    private $jsonDATA;
    public function __construct(string $jsonDATA)    {
        $this->jsonDATA = $jsonDATA;

    }
    
    public function jsonToArray(): array
    {
        $arrData = json_decode($this->jsonDATA, true);
        
        return $arrData;
    }
}
