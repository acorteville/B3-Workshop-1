<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Requirement {
    public $id;
    public $title;
    public $description;
    public $creationdate;
    public $startlastdate;
    public $duration;
    public $frequency;
    public $manualcoord;
    public $geocoord;
    public $rate;
    public $status;
    public $id_client;
    public $id_user;
    
    function __construct($pid, $ptitle, $pdescription, $pcreationdate, $startlastdate, $duration, $frequency, $pmanuelcoord, $pgeocoord, $prate, $pstatus, $pid_client, $pid_user)
    {
        $this->id = $pid;
        $this->title = $ptitle;
        $this->description = $pdescription;
        $this->creationdate = $pcreationdate;
        $this->startlastdate = $pcreationdate;
        $this->duration = $pcreationdate;
        $this->frequency = $pcreationdate;
        $this->manualcoord = $pcreationdate;
        $this->geocoord = $pcreationdate;
        $this->rate = $pcreationdate;
        $this->status = $pcreationdate;
        $this->id_client = $pcreationdate;
        $this->id_user = $pcreationdate;
    }
    
    public function getFiles() {
        return NULL;
    }
    
}