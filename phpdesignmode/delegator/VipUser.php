<?php


namespace phpdesignmode\delegator;


class VipUser implements IUser {
    public function geDiscount() {
        return 0.9;
    }

    public function getName() {
        return "VIP用户";
        
    }
    public function sendVipMsg($msg){
        return "this is vip message:".$msg;
    }

//put your code here
}
