<?php

require_once 'Shape.php';

class AreaCalculator{
    protected $shapes;

    /**
     * @param Shape[] $shapes
     */
    public function __construct(Shape $shapes)
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
        $area = [];
        foreach ($this->shapes as $shape) {
            // Check if the shape is a ShapeInterface
            // This can be skipped if we use the interface in the constructor
            if (is_a($shape, 'ShapeInterface')) {
              $area[] = $shape->area();
              continue;
            }

          throw new Exception('Invalid shape');
        }

        return array_sum($area);
    }
}