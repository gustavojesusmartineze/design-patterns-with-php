<?php

class AreaCalculator{
    protected $shapes;

    public function __construct($shapes = [])
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
        $area = [];
        foreach ($this->shapes as $shape) {
            // Each shape is now responsible for its own area calculation
            $area[] = $shape->area();
        }

        return array_sum($area);
    }

    //  This method is not part of the Single Responsibility Principle
    // That's why we'll remove it
    /*
    public function output()
    {
        return implode('', [
            '',
            'Sum of the areas of provided shapes: ',
            $this->sum(),
            '',
        ]);
    }
    */
}