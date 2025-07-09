<?php

require_once 'Drink.php';

class Sugary extends Drink
{
    public $expiration;

    public function __construct(string $name, float $price, float $tax, float $expiration)
    {
        parent::__construct($name, $price, $tax);
        $this->expiration = $expiration;
    }

    public function getPrice()
    {
        return ($this->price * $this->tax) - $this->expiration;
    }
}