<?php

class WebMoney implements PaymentServiceInterface
{

    public function pay($phone, $price): bool
    {
        echo "Оплата с помощью WebMoney";
    }
}