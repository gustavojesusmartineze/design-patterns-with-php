<?php

class ParentClass
{
    public $id;

    public function setId(int $id) : void
    {
        $this->id = $id;
    }
}

class ChildClass
{
    public $id;

    // This is not following the Liskov Substitution Principle
    // because the argument is not the same as the parent class
    // public function setId(string $id) : void
    public function setId(int $id) : void
    {
        $this->id = $id;

        // this does not follow the Liskov Substitution Principle
        // because it returns a value that is not void
        // return $this->id;
    }
}

// pre-conditions and post-conditions
function addFive(int $number) : int
{
    // pre-conditions
    // this is commented out because it is not part of the Liskov Substitution Principle
    // since this condition is set in the argument of the function
    // if (!is_integer($number)) {
    //     throw new Exception('Number must be an integer');
    // }

    // $total = $number +5;

    // post-conditions
    // this is commented out because it is not part of the Liskov Substitution Principle
    // since this condition is set in the return of the function
    // if (!is_integer($total)) {
    //     throw new Exception('Result must be an integer');
    // }

    // return $total;

    return $number + 5;
}