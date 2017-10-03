<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class File {
    public $id_requirement;
    public $id;
    public $name;
    
    function __construct($pid_requirement, $pid, $pname) {
        $this->id_requirement = $pid_requirement;
        $this->id = $pid;
        $this->name = $pname;
    }
}