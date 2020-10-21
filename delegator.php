<?php
include "vendor/autoload.php";
$user=new phpdesignmode\delegator\User();
echo "<hr/>";
echo "当前会员是：".$user->getName();
echo "当前会员享受的折扣是:".$user->geDiscount();
echo "<br/>";
echo "<hr/>";
$vipuser=new phpdesignmode\delegator\VipUser();
$user->setDelegator($vipuser);
echo "当前会员是：".$user->getName();
echo "当前会员享受的折扣是:".$user->geDiscount();
echo "<br/>";
echo $user->sendVipMsg("hahah");



