<?php

namespace App\Structural\Adapter;

class XMLReader implements IXMLReader
{
    private $xmlData;
    public function __construct(string $xmlData){
        $this->xmlData = $xmlData;
    }
    public function xmlToArray(): array
    {
        
        $objectData = simplexml_load_string($this->xmlData);

        // Convert into json 
        $jsonData = json_encode($objectData);

        // Convert into associative array 
        $arrData = json_decode($jsonData, true);
        return $arrData;
    }
}
