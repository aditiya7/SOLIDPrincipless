<?php

require_once 'Shape.php';
class Liquid implements Shape
{
    public function area()
    {
        //throw exception because you cannot find the area of a liquid
        throw new RuntimeException("Cannot find the area");

    }
}