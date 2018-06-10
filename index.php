<?php

include 'classes/shape.php';
include 'classes/triangle.php';
include 'classes/elipse.php';
include 'classes/circle.php';

if(isset($_POST['position']) ) //&& $_POST['position']=='sendPosition')
{
    $X = $_POST['X'];
    $Y = $_POST['Y'];
    $X1 = $_POST['X1'];
    $Y1 = $_POST['Y1'];
    $X2 = $_POST['X2'];
    $Y2 = $_POST['Y2'];

    $triangle = new Triangle();
    $triangle->setColor('red');
    $triangle->setX($X);
    $triangle->setY($Y);
    $triangle->setX1($X1);
    $triangle->setY1($Y1);
    $triangle->setX2($X2);
    $triangle->setY2($Y2);
    $triangle->draw();
    exit();
}

$triangle = new Triangle();
$triangle->setColor('red');
$triangle->setX(0);
$triangle->setY(100);
$triangle->setX1(100);
$triangle->setY1(0);
$triangle->setX2(200);
$triangle->setY2(200);




$elipse = new Elipse();
$elipse->setColor('green');
$elipse->setX(300);
$elipse->setY(100);
$elipse->setHeight(50);
$elipse->setWidth(100);

$circle = new Circle();
$circle->setColor('yellow');
$circle->setX(500);
$circle->setY(200);
$circle->setWidth(50);

include 'public/templates/index.phtml';

?>