<?php

require_once 'Vehicle.php';


class Bicycle extends Vehicle
{
    protected $nbSeats = 1;
    protected $bnWheels = 2;
    public function __construct(string $color)
    {
        parent::__construct($color);
    }
}