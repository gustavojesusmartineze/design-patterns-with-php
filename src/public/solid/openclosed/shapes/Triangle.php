<?php

require_once 'Shape.php';

class Triangle implements Shape
{
    public $base;
    public $height;
    public function __construct(float $base, float $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function area(): float
    {
        return $this->base * $this->height / 2;
    }
}