<?php

abstract class abstraction
{
    protected function getAbstraction()
    {
    }
}

class A extends abstraction
{
    public function getAbstraction()
    {
        return "I am A.";
    }
}