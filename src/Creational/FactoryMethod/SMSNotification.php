<?php
namespace App\Creational\FactoryMethod;

class SMSNotification implements INotify{
    public function notify(){
        echo "SMS is sent";
    }


}
?>