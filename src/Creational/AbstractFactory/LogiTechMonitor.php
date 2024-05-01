<?php
namespace App\Creational\AbstractFactory;

class LogiTechMonitor implements IMonitor{

    public function assemble(){
        echo "Assemble LogiTech Monitor";
    }
}