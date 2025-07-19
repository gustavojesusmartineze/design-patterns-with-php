<?php

interface SwitchInterface
{
    public function turnOn();
    public function turnOff();
}

// class SwitchC implements SwitchInterface
// {
//     public function turnOn()
//     {
//         echo "Turning on the light" . PHP_EOL;
//     }

//     public function turnOff()
//     {
//         echo "Turning off the light" . PHP_EOL;
//     }
// }

class LampSwitch implements SwitchInterface
{
    public function turnOn()
    {
        echo "Turning on the lamp" . PHP_EOL;
    }

    public function turnOff()
    {
        echo "Turning off the lamp" . PHP_EOL;
    }
}

class Lamp
{
    public $switch;

    public function __construct(SwitchInterface $switch)
    {
        $this->switch = $switch;
    }

    public function operate($command)
    {
        if ($command === 'on') {
            $this->switch->turnOn();
        } else if ($command === 'off') {
            $this->switch->turnOff();
        }
    }
}
$lampSwitch = new LampSwitch();
$lamp = new Lamp($lampSwitch);
$lamp->operate('on');
echo '<hr>';
$lamp->operate('off');