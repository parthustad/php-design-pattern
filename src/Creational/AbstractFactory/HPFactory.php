<?php
namespace App\Creational\AbstractFactory;

 class HPFactory extends Manufacturer{

    public  function createMonitor(){
        return new HPMoitor();
    }
    public  function createCPU(){
        return new  HPCPU();
    }

}