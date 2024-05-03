<?php
namespace App\Structural\Adapter;

interface IXMLReader{
    public function xmlToArray() : array;
}