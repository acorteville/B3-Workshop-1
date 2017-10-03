<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Contact {
    public $id;
    public $name;
    public $lastname;
    public $email;
    
    function __construct($pid, $pname, $plastname, $pemail) {
        $this->id = $pid;
        $this->name = $pname;
        $this->lastname = $plastname;
        $this->email = $pemail;
    }
}