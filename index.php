<?php
session_start();
define('BASESITE', "http://".$_SERVER['HTTP_HOST']."/epsi/B3-Workshop-1/");

include_once 'Classes/Client.php';
include_once 'Classes/Contact.php';
include_once 'Classes/File.php';
include_once 'Classes/Key.php';
include_once 'Classes/Pdom.php';
include_once 'Classes/Requirement.php';
include_once 'Classes/User.php';

include_once 'Models/m_Models.php';
include_once 'Models/m_Languages.php';

Pdom::getPdo();
$pdo = Pdom::getMonPdo();

$control = isset($_GET['control']) ? $_GET['control'] : 'c_home';
$idUserConnected = isset($_SESSION['email']) ? (string) $_SESSION['email'] : FALSE;

if($idUserConnected) {
    switch ($control) {
        case 'c_home':
            require 'Views/Template/v_top.php';
            require 'Views/Template/v_head.php';
            require 'Controlers/c_requirementsList.php';
            require 'Views/Template/v_foot.php';
            break;
        
        case 'c_detailsRequirement':
            require 'Views/Template/v_top.php';
            require 'Views/Template/v_head.php';
            require 'Views/Template/v_foot.php';
            break;
        
        case 'c_newRequirement':
            require 'Views/Template/v_top.php';
            require 'Views/Template/v_head.php';
            require 'Views/Template/v_foot.php';
            break;
        
        case 'c_logout':
            session_destroy();
            header('Location: '.BASESITE);
            break;
        
        default:
            require 'Views/Template/v_top.php';
            echo $text[$language]['problem'];
            require 'Views/Template/v_foot.php';
            break;
    }
            
} else {
    require 'Controlers/c_loginForm.php';
}