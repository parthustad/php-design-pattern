<?php

use App\Structural\Adapter\JSONReader;
use App\Structural\Adapter1\AndroidToIphoneChargerAdapter;
use App\Structural\Adapter1\Iphone;
use App\Structural\Bridge\TwokVideo;
use App\Structural\Bridge\YoutubePlatform;
use App\Structural\Composite\FolderComponent;
use App\Structural\Composite1\FieldsetComponent;
use App\Structural\Decorator\WifiRoomBooking;
use App\Structural\Facade\FacadePaymentLib;

require_once(__DIR__ . "/../vendor/autoload.php");

use App\Creational\AbstractFactory\HPFactory;
use App\Creational\AbstractFactory\LogiTechFactory;
use App\Creational\Builder\BuilderPattern;
use App\Creational\FactoryMethod\EmailProduct;
use App\Creational\FactoryMethod\SMSProduct;


use App\Creational\Prototype\PrototypePattern;
use App\Creational\Singleton\SignletonPattern;
use App\Structural\Adapter1\IPhoneCharger;
use App\Structural\Adapter\XMLReader;
use App\Structural\Adapter\XMLToJSONAdapter;
use App\Structural\Bridge\FourkVideo;
use App\Structural\Composite1\FieldComponent;
use App\Structural\Composite1\FormComponent;
use App\Structural\Composite\FileComponent;
use App\Structural\Decorator\SingleRoomBooking;



$fieldSet = new FieldsetComponent("Customer", "customer");
$fieldSet->addFieldComponent(new FieldComponent("Username", "username", "text", "parth1"));
$fieldSet->addFieldComponent(new FieldComponent("Email", "emmil", "email", "p@test.com"));
$fieldSet->addFieldComponent(new FieldComponent("Photo", "photo", "file", ""));

$form = new FormComponent("post","customer.php");


$form->addFieldComponent($fieldSet);
$form->addFieldComponent(new FieldComponent("Age", "age", "number", "21"));

echo $form->render();

exit;



$iphoneCharger =  new IPhoneCharger();
$chargerAdapter =new AndroidToIphoneChargerAdapter($iphoneCharger);
$chargerAdapter->charge();


exit;
$facadePaymentLib = new FacadePaymentLib();
$facadePaymentLib->processPayment();
exit;


$singleRoomBooking = new SingleRoomBooking();
$wifi = new WifiRoomBooking($singleRoomBooking);
echo $wifi->getPrice();


$obj1 = SignletonPattern::getInstance();
$obj2 = SignletonPattern::getInstance();




echo "<br/>";
$p1 = new PrototypePattern("Parth Shah");
$p2 = clone $p1;
echo "<pre>";
var_dump($p1, $p2);
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
$hpCPU = $hpFactory->createCPU();
$hpCPU->assemble();
echo "<br/>";

$logitechFactory = new LogiTechFactory();
$logitechMonitor = $logitechFactory->createMonitor();
$logitechMonitor->assemble();

echo "<br/>";
echo "<pre>";
$xml = file_get_contents(__DIR__ . "/sample.xml");

$xmlReader = new XMLReader($xml);
print_r($xmlReader->xmlToArray());


$json = file_get_contents(__DIR__ . "/sample.json");
$jsonReader = new JSONReader($json);
print_r($jsonReader->jsonToArray());

$xmlToJSONReader = new XMLToJSONAdapter($xmlReader);
print_r($xmlToJSONReader->jsonToArray());

$youTube2k = new YoutubePlatform(new TwokVideo());
$youTube2k->playVideo();

$youTube4k = new YoutubePlatform(new FourkVideo());
$youTube4k->playVideo();
echo "<br/>";
echo "<pre>";


$root = new FolderComponent("root");
$root->addStorage(new FileComponent("f1"));
$root->addStorage(new FileComponent("f2"));
$root->addStorage(new FileComponent("f3"));

echo $root->getName();

echo "<br/>";
echo "<pre>";

$root1 = new FolderComponent("root");
$root1->addStorage(new FileComponent("f11"));
$root1->addStorage(new FileComponent("f21"));
$root1->addStorage(new FileComponent("f31"));
$root1->addStorage($root);
echo $root1->getName();
