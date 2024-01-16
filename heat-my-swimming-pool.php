<?php

interface PoolTempsInterface {
    
    public function getActualTemp(): int;
    public function getLastDaysTemps(): array;  
    public function setHeater(bool $isActive): self;
}

class PoolTemps implements PoolTempsInterface {
    private int $currentTemp;
    private array $lastDaysTemps;
    public bool $isActive = false;

    public function __construct(int $currentTemp, array $lastDaysTemps) {
        $this->currentTemp = $currentTemp;
        $this->lastDaysTemps = $lastDaysTemps;
    }

    public function getActualTemp(): int {
        return $this->currentTemp;
    }

    public function getLastDaysTemps(): array {
        return $this->lastDaysTemps;
    }

    public function setHeater(bool $isActive): void {
        $this->isActive = $isActive;
        return $this;
    }

    public function activateHeater(): void {
        $averageTemp = array_sum($this->lastDaysTemps) / count($this->lastDaysTemps);
        if ($averageTemp > 20 && $this->currentTemp >= 25) {
            $this->isActive = true;
        }
    }
}
