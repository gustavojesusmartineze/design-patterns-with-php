<?php

class Circle implements Shape
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area(): float
    {
        return pi() * pow($this->radius, 2);
    }
}