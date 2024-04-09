<?php

require_once 'VolumeCalculator.php';
require_once 'Cube.php';
class VolumeCalculatorTest extends \PHPUnit\Framework\TestCase
{
    
    public function testCalculateVolume() {
        // Create instances of 3Dshapes
        $three_shapes = [
            new Cube(6),   // Volume = 216
            new Cube(7),   //Volume = 343
        ];

        // Create an instance of VolumeCalculator
        $volumeCalculator = new VolumeCalculator();

        // Calculate the expected total volume
        $expectedVolume = 216 + 343;

        // Call calculateArea() method and get the actual total area
        $actualVolume = $volumeCalculator->calculateVolume($three_shapes);

        // Assert that the actual total area matches the expected total area
        $this->assertEquals($expectedVolume, $actualVolume, 'Total area calculation is incorrect.');
    }
}
?>
