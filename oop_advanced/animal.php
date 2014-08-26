<?php

class Animal
{
    public $name;
    public $health = 100;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function walk()
    {
        $this->health -= 1;
        return $this;
    }

    public function run()
    {
        $this->health -= 5;
        return $this;
    }

    public function displayHealth()
    {
        echo "I have a current health of " . $this->health . "\n";
    }
}

class Dog extends Animal
{
    public $health = 150;

    public function pet()
    {
        $this->health += 5;
        return $this;
    }
}

class Dragon extends Animal
{
    public $health = 170;

    public function fly()
    {
        $this->health -= 10;
        return $this;
    }
}

$animal = new Animal("Tony");
$animal->walk()->walk()->walk()->run()->run()->displayHealth();

$dog = new Dog("Rooney");
$dog->walk()->walk()->walk()->run()->run()->pet()->displayHealth();

$dragon = new Dragon("Toothless");
$dragon->walk()->walk()->walk()->run()->run()->fly()->fly()->displayHealth();

?>
