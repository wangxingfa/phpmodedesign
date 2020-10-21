<?php

include "vendor/autoload.php";

$loads = [
    "one" => "\\phpdesignmode\\register\\TestOne",
    "two" => "\\phpdesignmode\\register\\TestTwo",
    "three" => "\\phpdesignmode\\register\\TestThree",
];

foreach ($loads as $key => $item) {
    $reflect_class = new ReflectionClass($item);
    $obj = $reflect_class->newInstance();
    \phpdesignmode\register\Container::register($key,$obj);
}
echo \phpdesignmode\register\Container::get("one")->one();
echo "<br/>";
echo \phpdesignmode\register\Container::get("two")->two();
echo "<br/>";
echo \phpdesignmode\register\Container::get("three")->three();



