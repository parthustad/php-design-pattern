<?php
namespace App\Creational\AbstractFactory;

class LogiTechCPU implements IMonitor{

    public function assemble(){
        echo "Assemble LogiTech CPU";
    }
}