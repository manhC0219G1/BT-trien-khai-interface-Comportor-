<?php
include "Colorable.php";
class Square implements Colorable{
    public $width;
    public function __construct($width)
    {
        $this->width=$width;
    }

    public function howToCoLor()
    {
        echo "Color all four sides";

    }
    public function calculateArea(){
        return pow($this->width,2);
    }
}