<?php
namespace App\Structural\Decorator;

class SingleRoomBooking implements IBooking{
    public function getPrice(): int{
        return 50;

    }
}