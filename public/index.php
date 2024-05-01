<?php
require_once(__DIR__ . "/../vendor/autoload.php");

use App\Creational\AbstractFactory\HPFactory;
use App\Creational\AbstractFactory\LogiTechFactory;
use App\Creational\Builder\BuilderPattern;
use App\Creational\FactoryMethod\EmailProduct;
use App\Creational\FactoryMethod\SMSProduct;


use App\Creational\Prototype\PrototypePattern;
use App\Creational\Singleton\SignletonPattern;

$obj1 = SignletonPattern::getInstance();
$obj2 = SignletonPattern::getInstance();

echo "<br/>";
$p1 = new PrototypePattern("Parth Shah");
$p2 = clone $p1;
echo "<pre>";
var_dump($p1,$p2);
echo "</pre>";
echo "<br/>";
$user = new BuilderPattern();
echo $user->setName("Parth Shah")->setAge("33")->setPhone("8200938594")->setAddress("Rander road, Surat")->build();
echo "<br/>";


$email = new EmailProduct();
$sms = new SMSProduct();

$email->sendNotification();
echo "<br/>";

$sms->sendNotification();
echo "<br/>";

$hpFactory = new HPFactory();
$hpCPU=$hpFactory->createCPU();
$hpCPU->assemble();
echo "<br/>";

$logitechFactory = new LogiTechFactory();
$logitechMonitor=$logitechFactory->createMonitor();
$logitechMonitor->assemble();
