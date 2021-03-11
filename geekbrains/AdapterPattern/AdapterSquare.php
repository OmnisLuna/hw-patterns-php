<?php

use ExternalLibrary\SquareAreaLib;

class AdapterSquare implements ISquare {

    /**
     * @var SquareAreaLib
     */
    private $squareAreaLib;

    public function __construct(
        SquareAreaLib $squareAreaLib
    )
    {
        $this->squareAreaLib = $squareAreaLib;
    }

    function squareArea(int $sideSquare)
    {
        $diagonal = $sideSquare*sqrt(2);
        return $this->squareAreaLib->getSquareArea($diagonal);
    }
}
