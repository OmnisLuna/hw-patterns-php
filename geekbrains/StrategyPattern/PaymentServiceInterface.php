<?php

interface PaymentServiceInterface
{
    /**
     * @param $phone
     * @param $price
     * @return bool
     */
    public function pay($phone, $price): bool;
}
