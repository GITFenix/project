<?php

class Cup
{
    private $color;
    private $holder;
    private $text;

    public function __construct($color, $holder, $text)
    {
        $this->color = $color;
        $this->holder = $holder;
        $this->text = $text;
    }

    public function __toString()
    {
        return (string) $this->color;
    }

    private function fillWithCofeey($water, $coffey, $sugar = null)
    {
        return $cupFullOfCoffery;
    }

    public function changeColor($color)
    {
        $this->color = $color;
    }

    public function color()
    {
        return $this->color;
    }
}