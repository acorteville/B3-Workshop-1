<?php 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getRequirements() {
    global $pdo;
    $sql = "SELECT * FROM `requirements`";
    $result = $pdo->prepare($sql);
    $result->execute();
    $requirements = array();
    foreach($result as $aLine) {
        $requirements[] = new Requirement($aLine['id'],
                $aLine['title'], 
                $aLine['description'], 
                $aLine['creationdate'], 
                $aLine['startlastdate'], 
                $aLine['duration'], 
                $aLine['frequency'], 
                $aLine['manualcoord'], 
                $aLine['geocoord'], 
                $aLine['rate'], 
                $aLine['status'], 
                $aLine['id_client'], 
                $aLine['id_user']
        );
    }
    return $requirements;
}

function getFilesOfRequirement($pidRequirement) {
    global $pdo;
    $sql = "SELECT * FROM `files` WHERE `id_requirement` = ".$pidRequirement;
    $result = $pdo->prepare($sql);
    $result->execute();
    $files = array();
    foreach($result as $aLine) {
        $files[] = new File($aLine['id_requirement'], 
                $aLine['id'], 
                $aLine['name']
        );
    }
    return $files;
}

function getKeysOfRequirement($pidRequirement) {
    global $pdo;
    $sql = "SELECT * FROM `keys` WHERE `id_requirement` = ".$pidRequirement;
    $result = $pdo->prepare($sql);
    $result->execute();
    $keys = array();
    foreach($result as $aLine) {
        $keys[] = new Key($aLine['id_requirement'], 
                $aLine['id'], 
                $aLine['successfactors']
        );
    }
    return $keys;
}

function getClientDetails($pidClient) {
    global $pdo;
    $sql = "SELECT * FROM `clients` WHERE `id`  = ".$pidClient;
    $result = $pdo->prepare($sql);
    $result->execute();
    $result = $result->fetch();
    return new Client($result['id'], $result['corporatename']);
}


function saveRequirement($ptitle, $pdescription, $pcreationdate, $pstartlastdate, $pduration, $pfrequency, $pmanuelcoord, $pgeocoord, $prate, $pstatus, $pid_client, $pid_user) {
    global $pdo;
    $sql = "INSERT INTO `requirements` (`id`, `title`, `description`, `creationdate`, `startlastdate`, `duration`, `frequency`, `manualcoord`, `geocoord`, `rate`, `status`, `id_user`, `id_client`) VALUES (NULL, '".$ptitle."', '".$pdescription."', now(), '".$pstartlastdate."', '".$pduration."', '".$pfrequency."', '".$pmanuelcoord."', '".$pgeocoord."', '".$prate."', '".$pstatus."', '".$pid_user."', '".$pid_client."');";
    $result = $pdo->prepare($sql);
    return $result->execute();
}

function updateRequirement($pid, $ptitle, $pdescription, $pcreationdate, $pstartlastdate, $pduration, $pfrequency, $pmanuelcoord, $pgeocoord, $prate, $pstatus, $pid_client, $pid_user) {
    global $pdo;
    $sql = "UPDATE `requirements` SET `id` = '".$pid."', `title` = '".$ptitle."', `description` = '".$pdescription."', `creationdate` = '".$pcreationdate."', `startlastdate` = '".$pstartlastdate."', `duration` = '".$pduration."', `frequency` = '".$pfrequency."', `manualcoord` = '".$pmanuelcoord."', `geocoord` = '".$pgeocoord."', `rate` = '".$prate."', `status` = '".$pstatus."', `id_user` = '".$pid_user."', `id_client` = '".$pid_client."' WHERE `id` = ".$pid.";";
    echo $sql;
    $result = $pdo->prepare($sql);
    return $result->execute();
}

function saveKey($pid, $pidrequirement, $psuccessfactors) {
    global $pdo;
    $sql = "INSERT INTO `keys` (`id`, `id_requirement`, `successfactors`) VALUES (NULL, '".$pidrequirement."', '".$psuccessfactors."');";
    $result = $pdo->prepare($sql);
    return $result->execute();
}

function updateKey($pid, $pidrequirement, $psuccessfactors) {
    global $pdo;
    $sql = "UPDATE `keys` SET `id` = '".$pid."', `id_requirement` = '".$pidrequirement."', `successfactors` = '".$psuccessfactors."' WHERE `id` = '".$pid."';";
    $result = $pdo->prepare($sql);
    return $result->execute();    
}

function loginUser($pemail) {
    global $pdo;
    $sql = "SELECT id, name, lastname, email FROM `users` WHERE `email` = '".$pemail."'";
    $result = $pdo->prepare($sql);
    $result->execute();
    $result = $result->fetch();
    if($result !== FALSE) {
        return new User($result['id'], $result['name'], $result['lastname'], $result['email']);
    } else {
        return FALSE;
    }
    
}
