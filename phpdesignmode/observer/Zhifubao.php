<?php

namespace phpdesignmode\observer;

class Zhifubao extends Apay {


    public function getInfo() {
        return "支付宝";
    }

    public function getPayLink() {
        return "支付宝支付跳转地址";
    }

    public function getPayPic() {
         return "支付宝的二维码";
        
    }

    public function getType() {
       return "zhifubao"; 
    }

//put your code here
}
