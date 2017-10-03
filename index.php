<?php

include_once 'Classes/Client.php';
include_once 'Classes/Contact.php';
include_once 'Classes/File.php';
include_once 'Classes/Key.php';
include_once 'Classes/Pdom.php';
include_once 'Classes/Requirement.php';
include_once 'Classes/User.php';

include_once 'Models/Models.php';

Pdom::getPdo();
$pdo = Pdom::getMonPdo();

$control = isset($_GET['control']) ? $_GET['control'] : 'home';


if(isset($_SESSION['email']))
    { if (isset($_SESSION['idSession']))
        {
            switch ($control) {
            case 'home':
                require 'Views/Template/head.php';
                require 'Controlers/requirementsList.php';
                require 'Views/requirementsList.php';
                require 'Views/Template/foot.php';
                break;

            default:
                break;
            }
            
        }
        else
            {
                require 'Controlers/login.php';
                //require 'Views/requirementsList.php';
            }
    }

