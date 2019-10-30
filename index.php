<?php

function my_autoloader($class)
{
    include 'classes/Geoometry/' . $class . '.php';
}

spl_autoload_register('my_autoloader');

echo " -------------------- RECTANGLE ----------------------<br />";

try {
    $rectangle = new Rectangle(259, 150);
    $rectangle->setColor("Pink");

    var_dump($rectangle);

    echo $rectangle;

    echo "<br /> Le périmètre du rectangle est de : " . $rectangle->getPerimeter() . ' px<sup>2</sup>';
    echo "<br /> L'aire du rectangle est de : " . $rectangle->getArea() . ' px<sup>2</sup>';
} catch (Exception $e) {
    echo '⚠ Une exception est survenue : ' . $e->getMessage();
}

echo " <br />------------------------------------------------<br />";

$square = new Square(50);
var_dump($square);

echo " <br />-------------------- CIRCLE ----------------------<br />";

try {
    $circle = new Circle(125);
    $circle->setColor("Cyan");

    var_dump($circle);

    echo $circle;

    echo "<br /> Le périmètre du cercle est de : " . $circle->getPerimeter() . ' px<sup>2</sup>';
    echo "<br /> L'aire du cercle est de : " . $circle->getArea() . ' px<sup>2</sup>';
} catch (Exception $e) {
    echo '⚠ Une exception est survenue : ' . $e->getMessage();
}

echo " <br />------------------------------------------------<br />";