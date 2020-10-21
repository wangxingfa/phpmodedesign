<?php

namespace phpdesignmode\observeranother;

class RecordRegister {

    public static $RECORD_METHODS = [];

    public static function addRecord($record) {

        if ($record instanceof IRecord && !isset(self::$RECORD_METHODS[$record->getName()])) {
            self::$RECORD_METHODS[$record->getName()] = $record;
        }
    }

    public static function removeRecord($record) {
        if ($record instanceof IRecord && isset(self::$RECORD_METHODS[$record->getName()])) {
            unset(self::$RECORD_METHODS[$record->getName()]);
        }
    }
    
    public static function recordAll(){
         
        $temp_arr=[];
        foreach(self::$RECORD_METHODS as $record){
            if($record instanceof IRecord){
               array_push($temp_arr,$record->recordDeal());
            }
        }
        return $temp_arr;
        
        
    }
    
    

}
