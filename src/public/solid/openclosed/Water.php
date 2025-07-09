<?php

require_once 'Drink.php';

class Water extends Drink
{
    public function getPrice()
    {
        return $this->price * $this->tax;
    }
}