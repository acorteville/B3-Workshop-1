<?php

include_once '../Classes/Pdom.php';
include_once '../Classes/Client.php';
include_once '../Classes/Contact.php';
include_once '../Classes/Requirement.php';

include_once '../Models/m_Models.php';

Pdom::getPdo();
$pdo = Pdom::getMonPdo();


$method = isset($_GET['m']) ? $_GET['m'] : 'getrequirement';
$sortingby = isset($_GET['s']) ? $_GET['s'] : 'id';
$order = isset($_GET['o']) ? $_GET['o'] : 'ASC';
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;


switch ($method) {
    case 'getrequirement':
        $requirements = getRequirements(1, NULL, $sortingby, $order);
        echo json_encode($requirements);
        break;
    
    case 'getcontacts':
        $contacts = getContacts($id);
        echo json_encode($contacts);
        break;

    default:
        break;
}