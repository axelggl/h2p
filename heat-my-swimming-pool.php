<?php

interface PoolTempsInterface {
    function getActualTemp(): int;
    function getLastDaysTemps(): array;
    function setHeater(bool $isHeaterOn): void;
}

class PoolTemps implements PoolTempsInterface {
    private int $actualTemp;
    private array $lastDaysTemps;
    public bool $isActive = false;
    
    public function __construct(int $actualTemp, array $lastDaysTemps) {
        $this->actualTemp = $actualTemp;
        $this->lastDaysTemps = $lastDaysTemps;
    }
    
    public function getActualTemp(): int {
        return $this->actualTemp;
    }
    public function getLastDaysTemps(): array {
        return $this->lastDaysTemps;
    }
    public function setHeater(bool $isHeaterOn): void {
        $this->isActive = $isHeaterOn;
    }
    
    public function activateHeater(): void {
        $averageLastDaysTemp = array_sum($this->lastDaysTemps) / count($this->lastDaysTemps);
        if ($averageLastDaysTemp > 20 && $this->actualTemp >= 25) {
            $this->setHeater(true);
        }
    }
}