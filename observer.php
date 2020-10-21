<?php
include "vendor/autoload.php";

$wechat=new \phpdesignmode\observer\Wechat() ;
$zhifubao=new \phpdesignmode\observer\Zhifubao();
$yinlian=new phpdesignmode\observer\Yinlian();
\phpdesignmode\observer\Paymethod::addPay($wechat);
\phpdesignmode\observer\Paymethod::addPay($zhifubao);
\phpdesignmode\observer\Paymethod::addPay($yinlian);
\phpdesignmode\observer\Paymethod::removePay($zhifubao);
\phpdesignmode\observer\Paymethod::getAllPays();








