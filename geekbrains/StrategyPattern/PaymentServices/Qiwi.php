<?php

class Qiwi implements PaymentServiceInterface
{

    public function pay($phone, $price): bool
    {
        echo "Оплата с помощью Qiwi";
    }
}