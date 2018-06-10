<?php
abstract class Shape
{
    protected $color;
    
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getColor()
    {
        return $this->color;
    }

    abstract function draw();
}
?>