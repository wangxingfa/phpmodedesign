<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace phpdesignmode\adapter;

/**
 * Description of IEBOOK
 *
 * @author Administrator
 */
interface IEBOOK {
  
    public function unlock();
    public function pressNext();
    public function getPage();
    public function setPage($num);
    
}
