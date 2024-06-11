<?php

namespace App\Behavioral\ChainOfResponsibilities;

 class EmailMiddleware extends UserMiddleware{
   
    public  function check(User $user){
        if(!$user->email){
            return new \Exception("Email is not available");
        }
        if(!$this->next){
            return "done";
        }
        $this->next->check($user);
    }
}