<?php
namespace   App\Structural\Bridge;

class YoutubePlatform extends AVideoStreamingPlatform{
    public function __construct(IVideoProcessor $processor){
        $this->processor = $processor;
    }
    public function playVideo(): void{
        $this->processor->process();
    }
   
}