<?php
namespace   App\Structural\Bridge;
abstract class AVideoStreamingPlatform{

    public IVideoProcessor $processor;
    public function __construct(IVideoProcessor $processor){
        $this->processor = $processor;
    }

    public abstract function playVideo() : void;
}