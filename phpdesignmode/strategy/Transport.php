<?php

namespace phpdesignmode\strategy;


class Transport {
    
    private $transport=null;
    
    public function getTransport($name){
        switch(strtolower($name)){
            case "bus":
                $this->transport=new BusStrategy();
                break;
            case "taxi":
                $this->transport=new TaxiStrategy();
                break;
            case "bike":
                $this->transport=new BikeStrategy();
                break;
        }
 
    }
    
    public function __call($name,$arguments){
       
        if($this->transport && method_exists($this->transport, $name)){
            return call_user_func_array([$this->transport,$name], $arguments);
        }
        
    }
    
}
