<?php

trait BCA //just like multiple inheritance.
{
    public $x = 10;
}

class Laptop
{
    public function brand()
    {
        return 'Laptop';
    }
}

class Dell extends Laptop
{
    use BCA; //using the traint thing here!!!
}

$obj = new Dell();
echo $obj->brand();
