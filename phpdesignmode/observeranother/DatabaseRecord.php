<?php

namespace phpdesignmode\observeranother;

/*数据库记录操作*/
class DatabaseRecord implements IRecord{
    public function recordDeal() {
        return "数据库记录操作！<br/>";
    }
      public function getName() {
        return "databaserecord";
    }
//put your code here
}
