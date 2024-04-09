<?php

require_once 'Shape.php';
class Rectangle implements Shape{
    //constructor to initialize length and breadth
    public function __construct($length,$breadth){
        $this->length = $length;
        $this->breadth = $breadth;
    }
    //getter method for length
    public function getLength(){
        return $this->length;
    }
    //getter method for breadth
    public function getBreadth(){
        return $this->breadth;
    }
    //method to find the area 
    public function area(){
        return $this->getLength() * $this->getBreadth();
    }
}