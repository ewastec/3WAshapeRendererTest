<?php
class Triangle extends Shape
{
    protected $x;
    protected $y;
    protected $x1;
    protected $y1;
    protected $x2;
    protected $y2;

    public function setX($x)
    {
        $this->x = $x;
    }
    public function setY($y)
    {
        $this->y = $y;
    }
    public function setX1($x1)
    {
        $this->x1 = $x1;
    }
    public function setY1($y1)
    {
        $this->y1 = $y1;
    }
    public function setX2($x2)
    {
        $this->x2 = $x2;
    }
    public function setY2($y2)
    {
        $this->y2 = $y2;
    }

    public function getX()
    {
        return $this->x;
    }
    public function getY()
    {
        return $this->y;
    }
    public function getX1()
    {
        return $this->x1;
    }
    public function getY1()
    {
        return $this->y1;
    }
    public function getX2()
    {
        return $this->x2;
    }
    public function getY2()
    {
        return $this->y2;
    }

    function draw()
    {
		echo '<polygon points="'.$this->x.','.$this->y.
								' '.$this->x1.','.$this->y1.
								' '.$this->x2.','.$this->y2.'" 
				fill="'.$this->color.'" />';
	}
}
?>