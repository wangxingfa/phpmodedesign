<?php

namespace phpdesignmode\delegator;

class User implements IUser {

    private $user_delegator = null;

    public function geDiscount() {
        if ($this->user_delegator && $this->user_delegator instanceof IUser) {
            return $this->user_delegator->geDiscount();
        }
        return 1;
    }

    public function getName() {
        if ($this->user_delegator && $this->user_delegator instanceof IUser) {
            return $this->user_delegator->getName();
        }
        return "普通用户";
    }
    public function setDelegator($user){
        if($user instanceof IUser){
            $this->user_delegator=$user;
        }
    }
    
    public function __call($name,$arguments){
        if($this->user_delegator && $this->user_delegator instanceof IUser){
            if(method_exists($this->user_delegator, $name)){
                return call_user_func_array([$this->user_delegator,$name], $arguments);
            }
        }
        return false;
    }
    

}
