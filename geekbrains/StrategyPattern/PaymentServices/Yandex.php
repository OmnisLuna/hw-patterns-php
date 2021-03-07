<?php

class Yandex implements PaymentServiceInterface
{

    public function pay($phone, $price): bool
    {
        echo "Оплата с помощью Yandex";
    }
}