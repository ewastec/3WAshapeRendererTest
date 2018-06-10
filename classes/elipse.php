<?php
class Elipse extends Shape
{
    protected $x;
    protected $y;
    protected $width;
    protected $height;

    public function setX($x)
    {
        $this->x = $x;
    }
    public function setY($y)
    {
        $this->y = $y;
    }
    public function setWidth($width)
    {
        $this->width = $width;
    }
    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getX()
    {
        return $this->x;
    }
    public function getY()
    {
        return $this->y;
    }
    public function getWidth()
    {
        return $this->width;
    }
    public function getHeight()
    {
        return $this->height;
    }

    function draw(){
        echo '<ellipse cx="'.$this->x.'" cy="'.$this->y.'" rx="'.$this->width.'" ry="'.$this->height.'" fill="'.$this->color.'" />';
    }
}
?>