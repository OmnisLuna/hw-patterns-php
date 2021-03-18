<?php

class Shop
{
    /**
     * @var PaymentServiceInterface[]
     */
    private $paymentServices;

    /**
     * Shop constructor.
     * @param array $paymentServices
     */
    public function __construct(array $paymentServices)
    {
        $this->paymentServices = $paymentServices;
    }
}