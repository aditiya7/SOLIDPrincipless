<?php

require_once 'Square.php';
require_once 'Circle.php';
require_once 'AreaCalculator.php';
require_once 'ShapesPrinter.php';
require_once 'Cube.php';
require_once 'Liquid.php';
require_once 'Rectangle.php';
require_once 'VolumeCalculator.php';
require_once 'ThreeDShapesPrinter.php';

$shapes = [
    new Square(10),
    new Circle(10),
    new Rectangle(10,3),
];

$three_shapes = [
    new Cube(60),
   
];

// Creating an instance of AreaCalculator and VolumeCalculator
$areacalculator = new AreaCalculator();
$volumecalculator = new VolumeCalculator();
//Creating an instance of ShapesPrinter and ThreeDShapesPrinter
$printer = new ShapesPrinter($areacalculator);
$threeDprinter = new ThreeDShapesPrinter($volumecalculator);

// Output the total area in json format
echo $printer->json($shapes) ."\n";
//Output the total area in csv format
echo $threeDprinter->csv($three_shapes)  . "\n";
//Output the total area in json format
echo $threeDprinter->json($three_shapes) ."\n";


?>