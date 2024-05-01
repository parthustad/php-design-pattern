<?php
namespace App\Creational\FactoryMethod;

abstract class NotificationFactory{

    abstract public function create();

    public function sendNotification(){

        $notification = $this->create();
        $notification->notify();
    }


}
?>