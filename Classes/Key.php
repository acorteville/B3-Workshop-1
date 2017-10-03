<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Key {
    public $id_requirement;
    public $id;
    public $successfactors;
    
    function __construct($pid_requirement, $pid, $psuccessfactors) {
        $this->id_requirement = $pid_requirement;
        $this->id = $pid;
        $this->successfactors = $psuccessfactors;
    }
}