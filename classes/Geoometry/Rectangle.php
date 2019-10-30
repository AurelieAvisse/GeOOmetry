<?php

require_once "Shape.php";

class Rectangle extends Shape
{

    /**
     * @var int
     */
    private $width;

    /**
     * @var int
     */
    private $height;

    /**
     * Rectangle constructor.
     * @param int $width
     * @param int $height
     */
    public function __construct(int $width, int $height)
    {
        $this->setWidth($width);
        $this->setHeight($height);
    }

    /**
     * @return float
     */
    public function getPerimeter(): float
    {
        return (($this->getWidth() + $this->getHeight()) * 2);
    }

    /**
     * @return float
     */
    public function getArea(): float
    {
        return (($this->getWidth() * $this->getHeight()));
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     * @return void
     */
    public function setWidth(int $width): void
    {
        if ($width <= 0) {
            throw new Exception('La valeur doit être supérieure à 0 !');
        }
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     * @return Rectangle
     */
    public function setHeight(int $height): Rectangle
    {
        if ($height <= 0) {
            throw new Exception('La valeur doit être supérieure à 0 !');
        }
        $this->height = $height;
        return $this;

    }

    public function __toString()
    {
        return '<div style="width:' . $this->width . 'px;height:' . $this->height .
        'px; background:' . $this->getColor() . ';"></div>';
    }
}