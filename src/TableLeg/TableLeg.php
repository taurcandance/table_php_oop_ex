<?php

namespace TableLeg;


abstract class TableLeg
{
    protected $height;
    protected $weight;
    protected $color;

    function __construct(int $height, int $weight, string $color)
    {
        $this->height = $height;
        $this->weight = $weight;
        $this->color  = $color;
    }

    /**
     * Get Height.
     *
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height): void
    {
        $this->height = $height;
    }

    /**
     * Get Weight.
     *
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight): void
    {
        $this->weight = $weight;
    }

    /**
     * Get Color.
     *
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }
}