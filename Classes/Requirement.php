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
    
    function __construct($pid, $ptitle, $pdescription, $pcreationdate, $pstartlastdate, $pduration, $pfrequency, $pmanualcoord, $pgeocoord, $prate, $pstatus, $pid_client, $pid_user)
    {
        $this->id = $pid;
        $this->title = $ptitle;
        $this->description = $pdescription;
        $this->creationdate = $pcreationdate;
        $this->startlastdate = $pstartlastdate;
        $this->duration = $pduration;
        $this->frequency = $pfrequency;
        $this->manualcoord = $pmanualcoord;
        $this->geocoord = $pgeocoord;
        $this->rate = $prate;
        $this->status = $pstatus;
        $this->id_client = $pid_client;
        $this->id_user = $pid_user;
    }
    
    public function getFiles() {
        return getFilesOfRequirement($this->id);
    }

    public function getKeys() {
        return getKeysOfRequirement($this->id);
    }
    
    public function getClient() {
        return getClientDetails($this->id_client);
    }

    
    public function save() {
        saveRequirement($this->title, 
                $this->description, 
                $this->creationdate, 
                $this->startlastdate, 
                $this->duration, 
                $this->frequency, 
                $this->manualcoord, 
                $this->geocoord, 
                $this->rate, 
                $this->status, 
                $this->id_client, 
                $this->id_user
        );
    }
    
    public function update($pid, $ptitle, $pdescription, $pcreationdate, $pstartlastdate, $pduration, $pfrequency, $pmanuelcoord, $pgeocoord, $prate, $pstatus, $pid_client, $pid_user) {
        updateRequirement($pid, 
                $ptitle, 
                $pdescription, 
                $pcreationdate, 
                $pstartlastdate, 
                $pduration, 
                $pfrequency, 
                $pmanuelcoord, 
                $pgeocoord, 
                $prate, 
                $pstatus, 
                $pid_client, 
                $pid_user
        );
    }

}