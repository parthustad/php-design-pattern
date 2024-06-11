<?php

namespace App\Behavioral\ChainOfResponsibilities;

 class NameMiddleware extends UserMiddleware{
   
    public  function check(User $user){
        if(!$user->name){
            return new \Exception("Name is not available");
        }
        if(!$this->next){
            return "done";
        }
        $this->next->check($user);
    }
}