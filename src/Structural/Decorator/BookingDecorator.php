<?php
namespace App\Structural\Decorator;

abstract class BookingDecorator implements IBooking{

    protected IBooking $booking;
    public function __construct(IBooking $booking){
        $this->booking = $booking;
    }
    abstract public function getPrice(): int;
}