<?php

namespace phpdesignmode\observeranother;

/*文本记录操作*/
class TxtRecord implements IRecord{
    public function recordDeal() {
        return "文本记录操作！<br/>";
    }
     public function getName() {
        return "txtrecord";
    }


//put your code here
}
