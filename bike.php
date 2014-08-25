<?php

class Bike
{
    public $price;
    public $max_speed;
    public $miles = 0;

    public function __construct($price, $max_speed)
    {
        $this->price = $price;
        $this->max_speed = $max_speed;
    }

    public function display_info()
    {
        echo "This bike costs ${$this->price} and has a max speed of {$this->max_speed} and has been driven  {$this->miles}  miles\n";
    }

    public function drive()
    {
        echo "Driving...\n";
        $this->miles += 10;
    }

    public function reverse()
    {
        if($this->miles > 5)
        {
            echo "Reversing...\n";
            $this->miles -= 5;
        }
        else
        {
            echo "You can't have negative miles!\n";
        }
    }
}

$bike1 = new Bike(300, 99999);
$bike1->drive();
$bike1->drive();
$bike1->drive();
$bike1->reverse();
$bike1->display_info();

$bike2 = new Bike(9999000, 77777777777777777);
$bike2->drive();
$bike2->drive();
$bike2->reverse();
$bike2->reverse();
$bike2->display_info();

$bike3 = new Bike(120, 99);
$bike3->reverse();
$bike3->reverse();
$bike3->reverse();
$bike3->display_info();


?>