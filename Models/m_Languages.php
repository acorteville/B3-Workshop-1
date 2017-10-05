<?php
$codelanguage = explode('-',$_SERVER['HTTP_ACCEPT_LANGUAGE'])[0];

if(isset($_COOKIE['lang'])) {
    $codelanguage = $_COOKIE['lang'];
}

switch ($codelanguage) {
    case 'fr':
        $language = "french";
        break;

    default:
        $language = "english";
        break;
}


$text['english']['site_title'] = "GFI HomePage";
$text['english']['description'] = "Description";
$text['english']['client'] = "Customers";
$text['english']['contact_name'] = "Contact";
$text['english']['start_at_the_latest'] = "Start at the latest";
$text['english']['3minkey'] = "3 Main key success factors";
$text['english']['date'] = "Date";
$text['english']['title'] = "Title";
$text['english']['duration'] = "Duration";
$text['english']['frequency'] = "Working frequency";
$text['english']['location'] = "Location";
$text['english']['rate'] = "Rate";
$text['english']['Save_and_share'] = "Save and share";
$text['english']['signin'] = "Sign In";
$text['english']['requirementslist'] = "List of Requirements";
$text['english']['logout'] = "Log Out";
$text['english']['problem'] = "Oops, Houston we've had a problem!";
$text['english']['addrequirement'] = "Add a requirement";
$text['english']['cancel'] = "Cancel";
$text['english']['saveandshare'] = "Save & Share";
$text['english']['newrequirement'] = "New requirement";
$text['english']['consultantsemails'] = "Consultants' emails";
$text['english']['name'] = "name";
$text['english']['lastname'] = "lastname";
$text['english']['next'] = "Next";
$text['english']['previous'] = "Previous";
$text['english']['home'] = "Home";
$text['english']['editrequirement'] = "Requirement Edition";
$text['english']['checklogin'] = "Login error : check your email adress";
$text['english']['Win'] = "Win";
$text['english']['Lost'] = "Lost";
$text['english']['Open'] = "Open";
$text['english']['dateincreasing'] = "Date : increasing";
$text['english']['datedecreasing'] = "Date : decreasing";
$text['english']['titreincreasing'] = "Titre : increasing";
$text['english']['titredecreasing'] = "Titre : decreasing";



$text['french']['site_title'] = "Site Internet GFI";
$text['french']['description'] = "Description";
$text['french']['client'] = "Client";
$text['french']['contact_name'] = "Contact";
$text['french']['start_at_the_latest'] = "Commencement au plus tard";
$text['french']['3minkey'] = "3 facteur clés de succès";
$text['french']['date'] = "Date";
$text['french']['title'] = "Titre";
$text['french']['duration'] = "Durée";
$text['french']['frequency'] = "Fréquence de travail";
$text['french']['location'] = "Localisation";
$text['french']['rate'] = "Prix";
$text['french']['Save_and_Share'] = "Sauvegarder et partager";
$text['french']['signin'] = "Connexion";
$text['french']['requirementslist'] = "Liste des Besoins";
$text['french']['logout'] = "Déconnexion";
$text['french']['problem'] = "Oups, Houston nous avons un problème!";
$text['french']['addrequirement'] = "Ajouter un besoin";
$text['french']['cancel'] = "Annuler";
$text['french']['saveandshare'] = "Sauvegarder et partager";
$text['french']['newrequirement'] = "Nouveau besoin";
$text['french']['consultantsemails'] = "Emails des consultants";
$text['french']['name'] = "nom";
$text['french']['lastname'] = "prénom";
$text['french']['next'] = "Suivant";
$text['french']['previous'] = "Précédent";
$text['french']['home'] = "Accueil";
$text['french']['editrequirement'] = "Édition d'un Besoin";
$text['french']['checklogin'] = "Erreur de connexion : vérifiez votre adresse email";
$text['french']['Win'] = "Fini";
$text['french']['Lost'] = "Annulé";
$text['french']['Open'] = "Ouvert";
$text['french']['dateincreasing'] = "Date : croissant";
$text['french']['datedecreasing'] = "Date : décroissant";
$text['french']['titreincreasing'] = "Titre : croissant";
$text['french']['titredecreasing'] = "Titre : décroissant";

