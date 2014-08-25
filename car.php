<?php 

class Car
{
 	public $price;
 	public $speed;
 	public $fuel;
 	public $mileage;
 	public $tax;

	public function __construct($price, $speed, $fuel, $mileage)
	{	
		$this->price = $price;
		$this->speed = $speed;
		$this->fuel = $fuel;
		$this->mileage = $mileage;
	}

	public function Display_all() 
	{
		if ($this->price > 10000)
		{
			$this->tax = 0.15;
		}
		else 
		{
			$this->tax = 0.12;
		}
		echo "The price is: {$this->price} dollars. The speed is: {$this->speed} mph. The fuel is: {$this->fuel}. The mileage is: {$this->mileage} mpg. The tax is: {$this->tax}\n"; 	
 	}
}

$car1 = new Car(2000, 35, 'Full', 15);
$car1->Display_all();

$car2 = new Car(2000, 5, 'Not Full', 105);
$car2->Display_all();

$car3 = new Car(2000, 15, 'Kind of Full', 95);
$car3->Display_all();

$car4 = new Car(2000, 25, 'Full', 25);
$car4->Display_all();

$car5 = new Car(2000, 45, 'Empty', 25);
$car5->Display_all();

$car6 = new Car(200000000, 35, 'Empty', 15);
$car6->Display_all();
?>