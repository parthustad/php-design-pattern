<?php

namespace App\Structural\Adapter1;

class AndroidCharger implements Android{
    public function charge(){
        echo "Android Charging";
    }
}