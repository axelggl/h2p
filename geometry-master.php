<?php

abstract class AbstractGeometry {
    abstract public function area(): int|float;
    abstract public function perimeter(): int|float;
}

class Rectangle extends AbstractGeometry {
    protected int|float $width;
    protected int|float $height;

    public function __construct(int|float $width, int|float $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area(): int|float {
        return $this->width * $this->height;
    }

    public function perimeter(): int|float {
        return 2 * ($this->width + $this->height);
    }
}

class Square extends AbstractGeometry {
    protected int|float $side;

    public function __construct(int|float $side) {
        $this->side = $side;
    }

    public function area(): int|float {
        return $this->side * $this->side;
    }

    public function perimeter(): int|float {
        return 4 * $this->side;
    }
}

class Triangle extends AbstractGeometry {
    protected int|float $side1;
    protected int|float $side2;
    protected int|float $side3;

    public function __construct(int|float $side1, int|float $side2, int|float $side3) {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function area(): int|float {
      
        $s = ($this->side1 + $this->side2 + $this->side3) / 2;
        return sqrt($s * ($s - $this->side1) * ($s - $this->side2) * ($s - $this->side3));
    }

    public function perimeter(): int|float {
        return $this->side1 + $this->side2 + $this->side3;
    }
}
