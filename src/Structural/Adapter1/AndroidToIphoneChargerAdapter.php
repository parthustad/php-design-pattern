<?php

namespace App\Structural\Adapter1;

class AndroidToIphoneChargerAdapter extends AndroidCharger{
    
    private Iphone $iphone;
    public function __construct(Iphone $iphone){
        $this->iphone = $iphone;
    }
    public function charge(){
        echo "Adapter Connected to iphone";
        $this->iphone->charge();
    }
}