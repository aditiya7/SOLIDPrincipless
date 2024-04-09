<?php

require_once 'IAreaCalculator.php';
class AreaCalculator implements IAreaCalculator {
    //Method to calculate the total area of an array of shapes
     function calculateArea($shapes) {
        $sum = 0;
        //Iterating over each shape in the array
        foreach ($shapes as $shape) {
          //Add the area of the current shape to the sum
          $sum += $shape->area();
        }
        return $sum;
    }

 
}
?>