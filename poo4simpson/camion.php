<?php

require_once 'Vehicle.php';


class Truck extends Vehicle

{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private int $storageCapacity;
    private int $actualCharge=0;



    public function __construct(string $color, int $nbSeats, int $storageCapacity, int $actualCharge)

{
        parent::__construct($color, $nbSeats);
        $this->actualCharge=$actualCharge;
        $this->storageCapacity= $storageCapacity;

}



    public function getEnergy(): string
{
        return $this->energy;
}

    public function setEnergy(string $energy): Truck

    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }


    public function setStorageCapacity(int $storageCapacity): int
    {
            return $this->$storageCapacity;
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }


    public function getActualCharge():int
    {
        return $this->actualCharge;
    }  
    
    public function setActualCharge(INT $actualCharge)
    {
        $this->actualCharge= $actualCharge;
    }



    public function actualChargeFull()

    {
        if ($this->actualCharge === $this->storageCapacity)
        {
            return "the truck is full";
        }
        else
        {
            return "The truck is Filling";
        }

        return $this;
    }

}

