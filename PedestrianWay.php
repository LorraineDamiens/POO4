<?php
require_once 'Highway.php';

final class PedestrianWay extends Highway
{
    private $nbLane = 1;
    private $maxSpeed= 10;

    public function addvehicles(Vehicle $currentVehicles)
    {
        if ($currentVehicles instanceof Bicycle)
            $this->currentVehicles[] = $currentVehicles;
    }

}
