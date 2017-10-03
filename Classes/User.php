<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User {
    public $id;
    public $name;
    public $lastname;
    public $email;
    
    function __construct($pid, $pname, $plastname, $pemail) {
        $this->id = $id;
        $this->name = $pname;
        $this->lastname = $plastname;
        $this->email = $pemail;
    }
    
    function getId()
    {
        return $this->id;
    }
    
    function getName()
    {
        return $this->name;
    }
    
    function getLastName()
    {
        return $this->lastname;
    }
    
    function getEmail()
    {
        return $this->email;
    }
    
    function setId($pid)
    {
        $this->id=$pid;
    }
    
    function setName($pname)
    {
        $this->name=$pname;
    }
    
    function setLastName($plastname)
    {
        $this->lastname=$plastname;
    }
    
    function setEmail($pemail)
    {
        $this->email=$pemail;
    }
    
}
?>