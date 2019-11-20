<?php

require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface
{
    const ALLOWED_ENERGIES = [
        ‘fuel’,
        ‘electric‘,
 ];
    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function switchOn()
    {
        $this->lights = true;
    }
    public function switchOff()
    {
        $this->lights = false;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->setEnergy($energy);
        }
        return $this;
    }
}
