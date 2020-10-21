<?php

namespace phpdesignmode\observer;

class Wechat extends Apay {
    public function getInfo() {
        return "微信支付";
    }

    public function getPayLink() {
        return "微信支付链接";
    }

    public function getPayPic() {
         return "微信支付图片";
        
    }

    public function getType() {
          return "wechat";
    }

//put your code here
}
