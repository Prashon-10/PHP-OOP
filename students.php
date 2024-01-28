<?php
// Static method can be called directly without creating an instance of a class (without creating object).

class Students
{

    public static $x = 100;
    public static function demo()
    {
        // echo "This is static method";
        //static huda we have to use self.
        echo self::$x;
    }
}

Students::demo();