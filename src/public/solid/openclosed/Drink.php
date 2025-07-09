<?php

abstract class Drink
{ 
    public $name;
    public $price;
    public $tax;

    public function __construct(string $name, float $price, float $tax) {
        $this->name = $name;
        $this->price = $price;
        $this->tax = $tax;
    }

    // Function that has to be implemented in each child
    abstract public function getPrice();
}
