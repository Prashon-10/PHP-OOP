<?php

class Introduction
{
    public $x = 10;
    public $y = 5;

    function run()
    {
        // Add
        echo $this->x + $this->y;
        echo "<br>";
        // Subtract
        echo $this->x - $this->y;
        echo "<br>";
        // Multiply
        echo $this->x * $this->y;
        echo "<br>";
        // Divide
        echo $this->x / $this->y;
        echo "<br>";
    }
}

$introduction = new Introduction();
$introduction->run();
