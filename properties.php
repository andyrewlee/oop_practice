<?php

class MyFirstClass
{
    public $my_property = "Omg I am setting a property";
}

$obj = new MyFirstClass();
echo $obj->my_property . '<br>';

$obj->my_property = "I changed it";
var_dump($obj);

$obj2 = new MyFirstClass();
var_dump($obj2);

?>
