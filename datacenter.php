<?php
include "vendor/autoload.php";

$books=  \phpdesignmode\datacenter\ProductFactory::createProduct("books");
$fruits=  \phpdesignmode\datacenter\ProductFactory::createProduct("fruits");
$cake=  \phpdesignmode\datacenter\ProductFactory::createProduct("cake");


\phpdesignmode\datacenter\ProductRegister::addProducts($books);
\phpdesignmode\datacenter\ProductRegister::addProducts($fruits);
\phpdesignmode\datacenter\ProductRegister::addProducts($cake);

$data_list=\phpdesignmode\datacenter\ProductRegister::getAllProducts();
print_r($data_list);


