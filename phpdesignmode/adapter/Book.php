<?php

namespace phpdesignmode\adapter;
class Book implements IBook {
    private $page;
    public function getPage() {
       return $this->page;
    }

    public function open() {
        $this->page=1;
    }

    public function turnPage() {
        $this->page++;
    }

}
