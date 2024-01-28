<?php
// Static method can be called directly without creating an instance of a class (without creating object).

class Students
{

    // public static $x = 100;
    // public static function demo()
    // {
    //     // echo "This is static method";
    //     //static huda we have to use self.
    //     echo self::$x;
    // }

    public function __construct()
    {
        echo "I am from Constructor.<br>";
    }

    public function test(){
        echo "I am form Test method.<br>";
    }

    // runs at the very end...
    public function __destruct(){
        echo "I am from Destructor.";
    }
}

$obj = new Students();
$obj->test();
// new Students();

// Students::demo();