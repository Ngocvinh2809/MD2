<?php
include_once "rectangle.php";
$width =10;
$height = 20;
$rectangle = new Rectangle($width,$height);
$rectangle->width=20;
$rectangle->height=30;
echo ("chu vi là : ".$rectangle->getPerimeter());
echo "<br/>";
echo ("diện tích là :" .$rectangle->getArea());
echo "<br/>";
echo ( " your rectangle ".$rectangle->display());