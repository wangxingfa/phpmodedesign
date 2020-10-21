<?php


namespace phpdesignmode\adapter;


class Kindle implements IEBOOK {
    private $page=1;
     private $totalPages = 100;
    public function getPage() {
          return [$this->page, $this->totalPages];
    }

    public function pressNext() {
         $this->page++;
    }

    public function unlock() {
        
    }

    public function setPage($num) {
        $this->page=$num;
    }

//put your code here
}
