<?php
class Circle extends Elipse
{
    function draw()
    {
        echo '<circle cx="'.$this->x.'" cy="'.$this->y.'" r="'.$this->width.'" fill="'.$this->color.'"/>';
    }
}
?>