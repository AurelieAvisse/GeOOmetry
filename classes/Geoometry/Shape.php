<?php

abstract class Shape
{
/**
 * @var string
 */
    private $color = 'Red';

    /**
     * @return float
     */
    abstract public function getPerimeter(): float;

    /**
     * @return float
     */
    abstract public function getArea(): float;

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return self
     */
    public function setColor(string $color): self
    {
        $this->color = $color;
        return $this;
    }

}
