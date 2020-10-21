<?php

namespace phpdesignmode\facade;


class Facade {
   private $subSystemOne;
   private $subSystemTwo;
   private $subSystemThree;
   private $subSystemFour;
   
   public function __construct() {
      $this->subSystemOne=new SubSystemOne();
      $this->subSystemTwo=new SubSystemTwo();
      $this->subSystemThree=new SubSystemThree();
      $this->subSystemFour=new SubSystemFour();
   }
   
   public function methodA(){
       $this->subSystemOne->MethodOne();
       $this->subSystemTwo->MethodTwo();
   }
   public function methodB(){
       $this->subSystemOne->MethodOne();
       $this->subSystemTwo->MethodTwo();
        $this->subSystemThree->MethodThree();
       $this->subSystemFour->MethodFour();
   }
}
