<?php

require_once 'Shape.php';
require_once 'ThreeDimensionalShape.php';
class Cube implements Shape,ThreeDimensionalShape{

    //Constructor method to initialize side
    public function __construct($side) {
        $this->side = $side;
    }
    //Getter method for side
    public function getSide() {
        return $this->side;
    }
    //Method to calculate the area
    public function area()
    {
        return 6* pow($this->getSide(), 2);
    }
    //Method to calculate the volume
    public function volume()
    {
        return pow($this->getSide(),3);
    }

}