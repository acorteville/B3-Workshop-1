<?php 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function filter($string) {
    return trim(addslashes($string));
}

function formatDate($date) {
    return date('d/m/Y', strtotime($date));
}


function getRequirements($ppage, $pnbperpage = NULL, $psort, $porder = "DESC", $psearch = NULL) {
    $minRange = ($ppage - 1) * $pnbperpage;
    global $pdo;
    
    $sortsauthorized = array('id', 'title', 'description', 'creationdate', 'startlastdate',
                            'duration', 'frequency', 'manualcoord', 'geocoord', 'rate',
                            'status', 'id_client', 'id_user');
    
    $ordersauthorized = array('ASC', 'DESC');
    if(in_array($porder , $ordersauthorized)) {
        $orderauthorized = $porder;
    }
    
    $sql = "SELECT * FROM `requirements`";
    if($psearch != NULL) {
        $sql .= " INNER JOIN `clients` ON clients.id = id_client WHERE `clients`.`corporatename` LIKE '".$psearch."%'";
    }
    if(in_array($psort , $sortsauthorized)) {
        $sql .= " ORDER BY status, ".$psort." ".$orderauthorized;
    } else {
        $sql .= " ORDER BY requirements.id ".$orderauthorized;
    }
    if($pnbperpage != NULL) {
        $sql .= " LIMIT ".$minRange.", ".$pnbperpage;
    }
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
                $aLine['id_user'],
                $aLine['id_contact']
        );
    }
    return $requirements;
}

function getClients() {
    global $pdo;
    $sql = "SELECT * FROM `clients`";
    $result = $pdo->prepare($sql);
    $result->execute();
    $clients = array();
    foreach($result as $aLine) {
        $clients[] = new Client($aLine['id'], $aLine['corporatename']);
    }
    return $clients;
}

function getContactsSpe($pid) {
    global $pdo;
    $sql = "SELECT * FROM `contacts` WHERE `id_client` = ".filter($pid);
    $result = $pdo->prepare($sql);
    $result->execute();
    $contacts = $result->fetchAll();
 /*   foreach($result as $aLine) {
        $contacts[] = new Contact($aLine['id'], $aLine['name'], $aLine['lastname'], $aLine['email']);
    } */
    return $contacts;
}

function getContacts($pid) {
    global $pdo;
    $sql = "SELECT * FROM `contacts` WHERE `id_client` = ".filter($pid)."ORDER BY name, lastname";
    $result = $pdo->prepare($sql);
    $result->execute();
    $contacts = array();
    foreach($result as $aLine) {
        $contacts[] = new Contact($aLine['id'], $aLine['name'], $aLine['lastname'], $aLine['email']);
    }
    return $contacts;
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

function getRequirementDetails($pidRequirement) {
    global $pdo;
    $sql = "SELECT * FROM `requirements` WHERE `id`  = ".$pidRequirement;
    $result = $pdo->prepare($sql);
    $result->execute();
    $result = $result->fetch();
    
    
    $result = new Requirement($result['id'],
        $result['title'], 
        $result['description'], 
        $result['creationdate'], 
        $result['startlastdate'], 
        $result['duration'], 
        $result['frequency'], 
        $result['manualcoord'], 
        $result['geocoord'], 
        $result['rate'], 
        $result['status'], 
        $result['id_client'], 
        $result['id_user'],
        $result['id_contact']
    );
    
    return $result;
}

function getClientDetails($pidClient) {
    global $pdo;
    $sql = "SELECT * FROM `clients` WHERE `id`  = ".$pidClient;
    $result = $pdo->prepare($sql);
    $result->execute();
    $result = $result->fetch();
    return new Client($result['id'], $result['corporatename']);
}


function saveRequirement($ptitle, $pdescription, $pcreationdate, $pstartlastdate, $pduration, $pfrequency, $pmanuelcoord, $pgeocoord, $prate, $pstatus, $pid_client, $pid_user, $pid_contact) {
    global $pdo;
    $sql = "INSERT INTO `requirements` (`id`, `title`, `description`, `creationdate`, `startlastdate`, `duration`, `frequency`, `manualcoord`, `geocoord`, `rate`, `status`, `id_user`, `id_client`, `id_contact`) VALUES (NULL, '".$ptitle."', '".$pdescription."', now(), '".$pstartlastdate."', '".$pduration."', '".$pfrequency."', '".$pmanuelcoord."', '".$pgeocoord."', '".$prate."', '".$pstatus."', '".$pid_user."', '".$pid_client."', '".$pid_contact."');";
    echo $sql;
    $result = $pdo->prepare($sql);
    $result->execute();
    return $pdo->lastInsertId();
}

function updateRequirement($pid, $ptitle, $pdescription, $pcreationdate, $pstartlastdate, $pduration, $pfrequency, $pmanuelcoord, $pgeocoord, $prate, $pstatus, $pid_client, $pid_user, $pid_contact) {
    global $pdo;
    $sql = "UPDATE `requirements` SET `id` = '".$pid."', `title` = '".$ptitle."', `description` = '".$pdescription."', `creationdate` = '".$pcreationdate."', `startlastdate` = '".$pstartlastdate."', `duration` = '".$pduration."', `frequency` = '".$pfrequency."', `manualcoord` = '".$pmanuelcoord."', `geocoord` = '".$pgeocoord."', `rate` = '".$prate."', `status` = '".$pstatus."', `id_user` = '".$pid_user."', `id_client` = '".$pid_client."', `id_contact` = '".$pid_client."' WHERE `id` = ".$pid.";";
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
if(isset($_POST['fonction']))
{
    if($_POST['fonction'] == "deleteRequirement")
    {
        deleteRequirement();
    }
}

function deleteRequirement($pid) {
    global $pdo;
    $sql = "DELETE FROM `requirements` WHERE `requirements`.`id` ='".filter($pid)."'";
    
    //var_dump($pdo);
    $result = $pdo->prepare($sql);
    $result->execute();
    if($result !== FALSE) {
        echo "true";
        return json_encode("true");
    } else {
        echo "false";
        return json_encode("false");
    }
    
}
