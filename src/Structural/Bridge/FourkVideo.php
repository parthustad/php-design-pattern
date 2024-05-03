<?php
namespace   App\Structural\Bridge;

class FourkVideo implements IVideoProcessor{
    public function process():void  {
        echo "play 4k Video";
    }

}