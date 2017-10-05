<?php
session_start();
define('BASESITE', "http://".$_SERVER['HTTP_HOST']."/epsi/B3-Workshop-1/");

// Inclusion des différentes classes du projet
include_once 'Classes/Client.php';
include_once 'Classes/Contact.php';
include_once 'Classes/File.php';
include_once 'Classes/Key.php';
include_once 'Classes/Pdom.php';
include_once 'Classes/Requirement.php';
include_once 'Classes/User.php';

// Inclusion des modèles
include_once 'Models/m_Models.php';
include_once 'Models/m_Languages.php';

// Initialisation de la variable de base de données
Pdom::getPdo();
$pdo = Pdom::getMonPdo();

// Instanciation de certaine variables importantes
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'id';
$order = isset($_GET['order']) ? $_GET['order'] : 'DESC';
$control = isset($_GET['control']) ? $_GET['control'] : 'c_home';

// Instantiation des variables de utiles à la session
$idUserConnected = isset($_SESSION['email']) ? (string) $_SESSION['email'] : FALSE;
$userConnected = isset($_SESSION['email']) ? loginUser($_SESSION['email']) : FALSE;

if($control == "c_changeLanguage") {
    require 'Controlers/c_changeLanguage.php';
}

if($idUserConnected) {
    switch ($control) {
        case 'c_home': // Page d'accueil
            require 'Views/Template/v_top.php';
            require 'Views/Template/v_head-list.php';
            require 'Controlers/c_requirementsList.php';
            require 'Views/Template/v_foot.php';
            require 'Views/Template/v_bottom.php';
            break;
        
        case 'c_editRequirement': // Page d'édition de Besoin
            require 'Views/Template/v_top.php';
            require 'Views/Template/v_head-edit.php';
            require 'Controlers/c_editRequirement.php';
            require 'Views/Template/v_foot.php';
            require 'Views/Template/v_bottom.php';
            break;
        
        case 'c_addRequirement': // Page d'ajout de Besoin
            require 'Views/Template/v_top.php';
            require 'Views/Template/v_head-new.php';
            require 'Controlers/c_addRequirement.php';
            require 'Views/Template/v_foot.php';
            require 'Views/Template/v_bottom.php';
            break;
        
        case 'c_404': // Page d'erreur
            require 'Views/Template/v_top.php';
            require 'Views/Template/v_head-new.php';
            require 'Views/Template/v_foot.php';
            require 'Views/Template/v_bottom.php';
            break;

        case 'c_logout': // Déconnexion
            session_destroy();
            header('Location: '.BASESITE);
            break;
        
        default: // La page par défault, si le controleur demandé ne fait pas partie de la liste des controleurs disponibles ci-dessus
            require 'Views/Template/v_top.php';
            echo $text[$language]['problem'];
            require 'Views/Template/v_foot.php';
            require 'Views/Template/v_bottom.php';
            break;
    }
            
} else {
    require 'Controlers/c_loginForm.php'; // On affiche le formulaire de connexion dans tout les cas si aucune session n'est lancée
}