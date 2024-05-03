<?php
namespace   App\Structural\Bridge;

class PrimePlatform extends AVideoStreamingPlatform{
    public function __construct(IVideoProcessor $processor){
        $this->processor = $processor;
    }
    public function playVideo(): void{
        $this->processor->process();
    }
    
}