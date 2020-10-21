<?php

namespace phpdesignmode\adapter;

class BookAdapter implements IBook {
    private $ebook;
    public function __construct($ebook){
        $this->ebook=$ebook;
        
    }
    public function getPage() {
        $temp=$this->ebook->getPage();
        return $temp[0];
        
                
    }

    public function open() {
        $this->ebook->setPage(1);
    }

    public function turnPage() {
        $this->ebook->pressNext();
        
    }
   

}
