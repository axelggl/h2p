<?php

class Car
{

    private float $tank;

    public function __construct()
    {
        $this->tank = 0;
    }

    public function getTank(): float
    {
        return $this->tank;
    }

    public function setTank(float $tank): self
    {
        $this->tank = $tank;
        return $this;
    }

    public function addFuel(float $gallons): self
    {
        $this->tank += $gallons;
        return $this;
    }

    public function ride(float $distance): self
    {
        $consommation = $distance / 20;
        $this->tank -= $consommation;
        return $this;
    }

}