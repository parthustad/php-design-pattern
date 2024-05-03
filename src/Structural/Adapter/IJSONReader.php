<?php
namespace App\Structural\Adapter;

interface IJSONReader{
    public function jsonToArray() : array;
}