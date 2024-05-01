<?php
namespace App\Creational\AbstractFactory;

class HPMoitor implements IMonitor{

    public function assemble(){
        echo "Assemble HP Monitor";
    }
}