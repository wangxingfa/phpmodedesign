<?php


namespace phpdesignmode\delegator;


class CorUser implements IUser {
    public function geDiscount() {
        return 0.8;
        
    }

    public function getName() {
        return "合作会员";
        
    }
    
    public function sendCorMsg($msg){
       return "发送合作会员的优惠信息:".$msg;
        
    }

//put your code here
}
