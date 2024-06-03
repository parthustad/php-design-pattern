<?php
namespace App\Structural\Decorator;

class WifiRoomBooking extends BookingDecorator{
    
    public function __construct(IBooking $booking){
        parent::__construct($booking);
    }
     public function getPrice(): int{
        return $this->booking->getPrice()*2;
     }
}