<!-- Encapsulation -->

<?php

class Record
{
    private $price = 200;

    public function getPrice()
    {
        return $this->price;
    }
}

$obj = new Record();
echo $obj->getPrice();
