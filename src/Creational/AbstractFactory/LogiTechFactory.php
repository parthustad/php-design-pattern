<?php
namespace App\Creational\AbstractFactory;

 class LogiTechFactory extends Manufacturer{

    public  function createMonitor(){
        return new LogiTechMonitor();
    }
    public  function createCPU(){
        return new  LogiTechCPU();
    }

}