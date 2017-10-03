<?php 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getFilesOfRequirement($pidRequirement) {
    global $pdo;
    $sql = "SELECT * FROM `files` WHERE `id_requirement` = ".$pidRequirement;
    $result = $pdo->prepare($sql);
    $result->execute();
    $files = array();
    foreach($result as $aLine) {
        $files[] = new File($aLine['id_requirement'], $aLine['id'], $aLine['name']);
    }
    return $files;
}

function getKeysOfRequirement($pidRequirement) {
    global $pdo;
    $sql = "SELECT * FROM `keys` WHERE `id_requirement` = ".$pidRequirement;
    $result = $pdo->prepare($sql);
    $result->execute();
    $files = array();
    foreach($result as $aLine) {
        $files[] = new Key($aLine['id_requirement'], $aLine['id'], $aLine['successfactors']);
    }
    return $files;
}

function saveRequirement($ptitle, $pdescription, $pcreationdate, $pstartlastdate, $pduration, $pfrequency, $pmanuelcoord, $pgeocoord, $prate, $pstatus, $pid_client, $pid_user) {
    global $pdo;
    $sql = "INSERT INTO `requirements` (`id`, `title`, `description`, `creationdate`, `startlastdate`, `duration`, `frequency`, `manualcoord`, `geocoord`, `rate`, `status`, `id_user`, `id_client`) VALUES (NULL, '".$ptitle."', '".$pdescription."', now(), '".$pstartlastdate."', '".$pduration."', '".$pfrequency."', '".$pmanuelcoord."', '".$pgeocoord."', '".$prate."', '".$pstatus."', '".$pid_user."', '".$pid_client."')";
    $result = $pdo->prepare($sql);
    return $result->execute();
}

function updateRequirement($pid, $ptitle, $pdescription, $pcreationdate, $pstartlastdate, $pduration, $pfrequency, $pmanuelcoord, $pgeocoord, $prate, $pstatus, $pid_client, $pid_user) {
    global $pdo;
    $sql = "UPDATE `requirements` SET `id` = '".$pid."', `title` = '".$ptitle."', `description` = '".$pdescription."', `creationdate` = '".$pcreationdate."', `startlastdate` = '".$pstartlastdate."', `duration` = '".$pduration."', `frequency` = '".$pfrequency."', `manualcoord` = '".$pmanuelcoord."', `geocoord` = '".$pgeocoord."', `rate` = '".$prate."', `status` = '".$pstatus."', `id_user` = '".$pid_user."', `id_client` = '".$pid_client."' WHERE `id` = ".$pid;
    echo $sql;
    $result = $pdo->prepare($sql);
    return $result->execute();
}