<?php


namespace phpdesignmode\facadeanother;

class MessageInfo {
    
    public function Send($service){
        $service->send();
    }
}
