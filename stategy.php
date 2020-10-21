<?php
include "vendor/autoload.php";

$transport=new phpdesignmode\strategy\Transport();
$transport->getTransport("bike");

$transport->wayToSchool();