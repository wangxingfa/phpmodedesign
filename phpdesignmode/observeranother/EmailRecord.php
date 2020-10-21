<?php

namespace phpdesignmode\observeranother;

/*邮件记录操作*/
class EmailRecord implements IRecord {
    
    public function recordDeal() {
        return "邮件记录操作！<br/>";
    }

    public function getName() {
        return "emailrecord";
    }

//put your code here
}
