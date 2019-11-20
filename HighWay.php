<?php

abstract class HighWay {

    protected $currentVehicles = [];

    protected $nbLane;

    protected $maxSpeed;

    public function __construct( int $nbLane, int $maxSpeed )
    {

        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }
    abstract public function addVehicles(Vehicle $currentVehicles);

    public function getNbLane(): int
    {
        return $this->NbLane;

    }
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;

    }


    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
        return $this;

    }
    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
        return $this;
    }


}