<?php

require_once "Rectangle.php";
require_once "Circle.php";

class Square extends Rectangle
{

    public function __construct(int $width)
    {
        parent::__construct($width, $width);
    }

}