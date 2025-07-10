<?php
interface ShapeInterface
{
    public function area();
}

interface ThreeDimensionalShapeInterface
{
    public function volume();
}

class Square implements ShapeInterface { // Only implements area()
    public $length;

    public function __construct($length) {
        $this->length = $length;
    }

    public function area() {
        return pow($this->length, 2);
    }
}

class Cuboid implements ShapeInterface, ThreeDimensionalShapeInterface
{
    public function area()
    {
        // calculate the surface area of the cuboid
    }

    public function volume()
    {
        // calculate the volume of the cuboid
    }
}