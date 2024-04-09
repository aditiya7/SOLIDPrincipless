<?php

require_once 'IVolumeCalculator.php';
class VolumeCalculator implements IVolumeCalculator{
    //method to calculate the total volume for all 3D shapes
  function calculateVolume($three_shapes) {
        $volume = 0;
        //Iterating through each shape
        foreach ($three_shapes as $shape) {
          $volume += $shape->volume();
        }
        return $volume;
    }

}