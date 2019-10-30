<?php

require_once "Shape.php";

class Circle extends Shape
{

    /**
     * @var int
     */
    private $radius;

    const PI = 3.14159;

    /**
     * Rectangle constructor.
     * @param int $width
     * @param int $height
     */
    public function __construct(int $radius)
    {
        $this->setRadius($radius);
    }

    /**
     * @return float
     */
    public function getPerimeter(): float
    {
        return (2 * self::PI * ($this->getRadius()));
    }

    /**
     * @return float
     */
    public function getArea(): float
    {
        return ((($this->getRadius()) ** 2) * self::PI);
    }

    /**
     * @return float
     */
    public function getDiameter(): float
    {
        return ($this->getRadius() * 2);
    }

    /**
     * @return int
     */
    public function getRadius(): int
    {
        return $this->radius;
    }

    /**
     * @param int $radius
     * @return void
     */
    public function setRadius(int $radius): void
    {
        if ($radius <= 0) {
            throw new Exception('La valeur doit être supérieure à 0 !');
        }
        $this->radius = $radius;

    }

    public function __toString()
    {
        return '<div style="width:' . $this->getDiameter() . 'px;height:' . $this->getDiameter() . 'px;border-radius: 50%; background:' . $this->getColor() . ';"></div>';
    }
}