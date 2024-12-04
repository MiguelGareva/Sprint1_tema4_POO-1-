<?php 

require_once("Shape.php");
require_once("Rectangle.php");
require_once("Triangle.php");

$rectangle = new Rectangle(6,4);
$rectangle->calculateArea();

$triangle = new Triangle(5,4);
$triangle->calculateArea();
?>