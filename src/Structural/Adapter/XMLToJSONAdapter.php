<?php


namespace App\Structural\Adapter;
use App\Structural\Adapter\IJSONReader;

class  XMLToJSONAdapter implements IJSONReader
{
    private XMLReader $xmlReader;

    public function __construct( XMLReader $xmlReader)
    {
        $this->xmlReader = $xmlReader;
    }
    public function jsonToArray(): array{       
        return   $this->xmlReader->xmlToArray();
    }

}