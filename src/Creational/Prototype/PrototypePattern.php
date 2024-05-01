<?php
namespace App\Creational\Prototype;

class PrototypePattern{
    public string $name;
    public function __construct(string $name){
        $this->name = $name;
    }

    public function __clone(){
        $this->name = "Parth Desai";
    }
}