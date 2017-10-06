<?php

/***
 * Le WebService réponds aux requêtes passées en mote GET vers les liens suivants:
 * 
 * - Récupération des Besoins :
 *  http://monsite.com/WebServices/?m=getrequirements&s=id&o=ASC
 * 
 * - Récupération des contacts d'un Client
 *  http://monsite.com/WebServices/?m=getcontacts&id={id d'un client}
 */

include_once '../Classes/Pdom.php';
include_once '../Classes/Client.php';
include_once '../Classes/Contact.php';
include_once '../Classes/Requirement.php';

include_once '../Models/m_Models.php';

Pdom::getPdo();
$pdo = Pdom::getMonPdo();


$method = isset($_GET['m']) ? $_GET['m'] : 'getrequirements';
$sortingby = isset($_GET['s']) ? $_GET['s'] : 'id';
$order = isset($_GET['o']) ? $_GET['o'] : 'ASC';
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;
$search = isset($_GET['s']) ? $_GET['s'] : null;
        


switch ($method) {
    case 'getrequirements':
        $requirements = getRequirements(1, NULL, $sortingby, $order, $search);
        echo json_encode($requirements);
        break;
    
    case 'getcontacts':
        $contacts = getContactsSpe($id);
        echo json_encode($contacts);
        break;

    default:
        break;
}