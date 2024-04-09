<?php

class ThreeDShapesPrinter
{
    private $volumeCalculator;

    public function __construct(IVolumeCalculator $volumeCalculator)//Does not depend on the concrete class
    
    {
        $this->volumeCalculator = $volumeCalculator;
    }
    //Converting sum to json format
    public function json($three_shapes) 
    {
        return json_encode(["volume" => $this->volumeCalculator->calculateVolume($three_shapes)]);
    }
    //Converting sum to csv format
    public function csv($three_shapes) 
    {
        return "volume , " . $this->volumeCalculator->calculateVolume($three_shapes);
    }
}
?>