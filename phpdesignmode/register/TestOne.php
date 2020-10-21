<?php

namespace phpdesignmode\register;


class TestOne {
    public function one(){
        return "one";
    }
    public function __call($name,$arguments){
        echo 1111;
    }
}
