<?php

require_once 'Drink.php';

class Alcohol extends Drink
{
    public $promo;

    public function __construct(string $name, float $price, float $tax, float $promo)
    {
        parent::__construct($name, $price, $tax);
        $this->promo = $promo;
    }

    public function getPrice()
    {
        return ($this->price * $this->tax) - $this->promo;
    }
}