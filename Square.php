<?php
require_once 'Shape.php';
class Square implements Shape {
    private $length;
    //constructor to initialize length
    public function __construct($length) {
        $this->length = $length;
    }
    //Getter method for length
    public function getLength() {
        return $this->length;
    }
    //Method to calculate the area
    public function area()
    {
        return pow($this->getLength(), 2);
    }
}
?>
 