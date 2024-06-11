<?php

namespace App\Behavioral\ChainOfResponsibilities;

 class IDMiddleware extends UserMiddleware{
   
    public  function check(User $user){
        if(!$user->id){
            return new \Exception("ID is not available");
        }
        if(!$this->next){
            return "done";
        }
        $this->next->check($user);
    }
}