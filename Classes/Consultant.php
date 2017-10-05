<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Consultant {
    public $id;
    public $name;
    
    function __construct($pid, $pname) {
        $this->id = $pid;
        $this->name = $pname;
    }
}