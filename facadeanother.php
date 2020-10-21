<?php

include "vendor/autoload.php";

$servicecontroller=new \phpdesignmode\facadeanother\ServiceController();

$servicecontroller->pushAndSendAliyun();

echo "<hr/>";

$servicecontroller->pushAndSendJiguang();

