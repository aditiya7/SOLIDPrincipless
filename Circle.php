<?php

require_once 'shape.php';
class Circle implements Shape {
    private $radius;

    //Constructor method to initialize the radius
    public function __construct($radius) {
        $this->radius = $radius;
    }
    //Getter method for radius
    public function getRadius() {
        return $this->radius;
    }
    //Method to calculate the area
    public function area()
    {
        return M_PI * pow($this->getRadius(), 2);
    }
}