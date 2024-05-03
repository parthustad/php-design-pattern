<?php
namespace App\Structural\Bridge;

class TwokVideo implements IVideoProcessor{
    public function process():void  {
        echo "play 2k Video";
    }

}