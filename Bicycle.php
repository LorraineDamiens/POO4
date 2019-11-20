<?php

require_once 'Vehicle.php';


class Bicycle extends Vehicle implements LightableInterface
{
    protected $nbSeats = 1;
    protected $bnWheels = 2;

    public function __construct(string $color)
    {
        parent::__construct($color);
    }


    /**
     * @var boolean
     */
    private $lights;

    public function switchOn()
    {
        if ($this->currentSpeed > 10) {
            $this->lights = true;
        } else {
            $this->lights = false;


            public
            function switchOff()
            {
                $this->lights = false;
            }
        }
    }
}