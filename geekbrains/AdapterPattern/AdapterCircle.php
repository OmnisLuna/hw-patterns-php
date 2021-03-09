<?php

use ExternalLibrary\CircleAreaLib;

class AdapterCircle implements ICircle
{

    /**
     * @var CircleAreaLib
     */
    private $circleAreaLib;

    public function __construct(
        CircleAreaLib $circleAreaLib
    )
    {
        $this->circleAreaLib = $circleAreaLib;
    }

    function circleArea(int $circumference)
    {
        $diagonal = intval($circumference / M_PI);
        return $this->circleAreaLib->getCircleArea($diagonal);
    }
}