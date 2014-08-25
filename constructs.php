<?php

class Person
{
    public $first_name;
    public $last_name;

    public function __construct($first_name, $last_name)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }
}

$person1 = new Person("Andrew", "Lee");
var_dump($person1);

$person2 = new Person("Kobe", "Bryant");
var_dump($person2);

?>
