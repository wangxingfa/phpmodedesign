<?php
include "vendor/autoload.php";

$book=new \phpdesignmode\adapter\Book();
$book->open();
$book->turnPage();
echo $book->getPage();
echo "<br/><hr/>";

$adapter=new \phpdesignmode\adapter\BookAdapter(new \phpdesignmode\adapter\Kindle());
$adapter->open();
$adapter->turnPage();
echo $adapter->getPage();

