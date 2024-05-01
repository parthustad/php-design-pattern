<?php
namespace App\Creational\FactoryMethod;

class EmailProduct extends NotificationFactory {

    public function create(){
        return new EmailNotification();
     }

}
?>