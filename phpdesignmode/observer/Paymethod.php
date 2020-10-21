<?php

namespace phpdesignmode\observer;

class Paymethod {

    private static $pays = [];

    public static function addPay($pay) {
        if (is_subclass_of($pay, "\\phpdesignmode\\observer\\Apay")) {
            self::$pays[$pay->getType()] = $pay;
        }
    }

    public static function removePay($pay) {
        if (is_subclass_of($pay, "\\phpdesignmode\\observer\\Apay")  && isset(self::$pays[$pay->getType()])) {
            unset(self::$pays[$pay->getType()]);
        }
    }
    
    public static function getAllPays(){
        foreach(self::$pays  as $pay){
            echo $pay->getPayPic();
            echo "<br/>";
        }
    }
    

}
