<?php

require_once 'Highway.php';
final class ResidentialWay extends Highway
{
    private $nbLane = 2;
    private $maxSpeed= 50;

    public function addvehicles(Vehicle $currentVehicles)
    {
        if ($currentVehicles instanceof Vehicle)
            $this->currentVehicles[] = $currentVehicles;
    }

}