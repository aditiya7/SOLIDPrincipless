<?php

require_once 'AreaCalculator.php';
require_once 'Square.php';
require_once 'Circle.php';
require_once 'Rectangle.php';
class AreaCalculatorTest extends \PHPUnit\Framework\TestCase
{
    
    public function testCalculateArea() {
        // Create instances of shapes
        $shapes = [
            new Square(5),   // Area = 25
            new Circle(4),   // Area = 50.265...
            new Rectangle(6, 3)  // Area = 18
        ];

        // Create an instance of AreaCalculator
        $areaCalculator = new AreaCalculator();

        // Calculate the expected total area
        $expectedArea = 25 + 50.26548245743669 + 18;

        // Call calculateArea() method and get the actual total area
        $actualArea = $areaCalculator->calculateArea($shapes);

        // Assert that the actual total area matches the expected total area
        $this->assertEquals($expectedArea, $actualArea, 'Total area calculation is incorrect.');
    }
}
?>
