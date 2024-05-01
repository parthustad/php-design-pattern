<?php
namespace App\Creational\AbstractFactory;

class HPCPU implements ICPU{

    public function assemble(){
        echo "Assemble HP CPU";
    }
}