<?php
require_once 'Vehicle.php';
class Truck extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    /**
     * @var integer
     */
    private $energyLevel;
    /**
     * @var string
     */
    private $energy;
    /**
     * @var integer
     */
    private $capacity = 0;
    /**
     * @var integer
     */
    private $load = 0;
    // constructor
    public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
    {
        parent::__construct($color, $nbSeats);
        $this-> setEnergy($energy);
        $this-> capacity = $capacity;
    }

    public function filling()
    {
        if ($this->load < $this->capacity)
            return 'in filling';
        else
            return 'full';
    }

    public function getEnergy(): int
    {
        return $this->energy;
    }
    public function getEnergyLevel(): string
    {
        return $this->energyLevel;
    }
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }
    public function getCapacity(): int
    {
        return $this->capacity;
    }
    public function getLoad(): int
    {
        return $this->load;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }
    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }
    public function setLoad(int $load): void
    {
        $this->load = $load;
    }
}

