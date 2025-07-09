<?php

require_once 'Drink.php';

class Invoice
{
    public $drinks;
    /**
     * @param Drink[] $drinks Array of Drink instances
     */
    public function __construct(array $drinks )
    {
        $this->drinks = $drinks;
    }

    public function calculateTotal()
    {
        $total = 0;
        foreach ($this->drinks as $drink) {
            $total += $drink->getPrice();
        }
        return $total;
    }
}