<?php

namespace phpdesignmode\datacenter;

class ProductRegister {
    public static $ALL_OBJECTS=[];
    public static function addProducts($obj){

        if($obj instanceof Iproduct){
            self::$ALL_OBJECTS[$obj->getName()]=$obj;
       }
    }
    public static function removeProducts($obj){
        if(isset(self::$ALL_OBJECTS[$obj->getName])){
            unset(self::$ALL_OBJECTS[$obj->getName]);
        }
    }
  public static function getAllProducts() {

      $myproduct_list=[];
      foreach(self::$ALL_OBJECTS as $obj){
          if($obj instanceof Iproduct){
              array_push($myproduct_list,$obj->getList());
          }
      }
      
      return $myproduct_list;
      
  }
    
}
