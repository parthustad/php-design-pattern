<?php

namespace App\Structural\Facade;

class FacadePaymentLib
{

    private PaymentLib $paymentLib;
    private int $balance = 300;

    public function __construct()
    {
        $this->paymentLib = new PaymentLib();
    }
    public  function processPayment(): void
    {
        if ($this->balance < 50) {
            echo "Minimum balance should be 50 INR";
            return;
        }
        $this->paymentLib->pay();
    }
}
