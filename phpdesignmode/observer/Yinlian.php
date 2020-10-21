<?php

namespace phpdesignmode\observer;

class Yinlian extends Apay {
    public function getInfo() {
        return "银联支付";
    }

    public function getPayLink() {
        return "银联支付链接";
    }

    public function getPayPic() {
         return "银联支付图片";
        
    }

    public function getType() {
          return "yinlian";
    }

//put your code here
}
