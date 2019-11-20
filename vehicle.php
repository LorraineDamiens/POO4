<?php
class Vehicle
{
    /**
     * @var string
     */
    protected $color;
    /**
     * @var integer
     */
    protected $currentSpeed;
    /**
     * @var integer
     */
    protected $nbSeats;
    /**
     * @var integer
     */
    protected $nbWheels;
    /**
     * @var string
     */
    protected $name;

    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }

    public function start()
    {
        return "Engine started !";
    }
    public function forward()
    {
        $this->currentSpeed = 15;
        return "Go Go !";
    }
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
    public function dump()
    {
        var_dump($this);
    }

    public function getColor(): string
    {
        return $this->color;
    }
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }
    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
