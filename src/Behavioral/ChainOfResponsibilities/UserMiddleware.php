<?php

namespace App\Behavioral\ChainOfResponsibilities;

abstract class UserMiddleware{
    public $next;

    public function then(UserMiddleware $userMiddleware){
        $this->next = $userMiddleware;
    }

    abstract  function check(User $user);
}