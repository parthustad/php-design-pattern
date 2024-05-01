<?php
namespace App\Creational\AbstractFactory;

abstract class Manufacturer{

    public abstract function createMonitor();
    public abstract function createCPU();

}