<?php
// 1. what are higher level modules?
//    Anything that accepts the Abstraction and does something with it
//    donePooping(ToiletInterface $toilet) {
//      $toilet->flush();
//    }
// 2. what are lower level modules?
//    Any class that implements the Abstraction
//    If a class implements the Abstraction, it is a lower level module.
//      Then it can do whatever that behavior is ~ int its own way.
// 3. what are the abstraction and how do we depend on them?
//    Abstraction is our interface
//    We depend on the interface, not the implementation

// Abstraction is our interface
interface ToiletInterface
{
  public function flush();
}

// lower level module
class PortaPottyToilet implements ToiletInterface
{
    public function flush()
    {
        echo 'PortaPotty Toilet Flushed' . PHP_EOL;
    }
}

// lower level module
class OrangePottyToilet implements ToiletInterface
{
    public function flush()
    {
        echo 'OrangePotty Toilet Flushed' . PHP_EOL;
    }
}


// lower level module
class GoldenToilet implements ToiletInterface
{
    public function flush()
    {
        echo 'Golden Toilet Flushed' . PHP_EOL;
    }
}

// higher level module
class Human
{
    public function donePooping(ToiletInterface $toilet)
    {
        $toilet->flush();
    }
}

$human = new Human();
$human->donePooping(new PortaPottyToilet());
$human->donePooping(new GoldenToilet());