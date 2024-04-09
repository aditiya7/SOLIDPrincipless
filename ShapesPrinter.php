<?php

class ShapesPrinter
{
    private $areaCalculator;

    public function __construct(IAreaCalculator $areaCalculator)//Does not depend on the concrete class
    {
        $this->areaCalculator = $areaCalculator;
    }
    //Converting sum to json format
    public function json($shapes) 
    {
        return json_encode(["area" => $this->areaCalculator->calculateArea($shapes)]);
    }
    //Converting sum to csv format
    
    public function csv($shapes) 
    {
        return "area , " . $this->areaCalculator->calculateArea($shapes);
    }
}
?>