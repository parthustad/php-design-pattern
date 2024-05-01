<?php
namespace App\Creational\FactoryMethod;

class SMSProduct extends NotificationFactory {

     public function create(){
        return new SMSNotification();
     }

}
?>