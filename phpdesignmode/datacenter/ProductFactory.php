<?php


namespace phpdesignmode\datacenter;

class ProductFactory {
     public static function createProduct($productType){
         $obj=null;
   
         switch(strtolower($productType)){
             case  'cake':
                 $obj=new Cake();
                 break;
             case 'fruits':
                 $obj=new Fruits();
                 break;
             case 'books':
                 $obj=new Books();
                 break;
         }
         if($obj){
             return $obj;
         }
         return false;
         
     }
}
