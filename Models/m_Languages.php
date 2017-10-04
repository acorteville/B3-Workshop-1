<?php

// setcookie("lang","en",time()+86400);
//unset($_COOKIE["lang"]);

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
$text['english']['3minkey'] = "3 main key success factors";
$text['english']['date'] = "Date";
$text['english']['duration'] = "Duration";
$text['english']['location'] = "Location";
$text['english']['rate'] = "Rate";
$text['english']['Save_and_share'] = "Save and share";
$text['english']['signin'] = "Sign In";
$text['english']['requirementslist'] = "List of Requirements";
$text['english']['logout'] = "Log Out";
$text['english']['problem'] = "Oops, Houston we've had a problem!";
$text['english']['addrequirement'] = "Add a requirement";
$text['english']['langversion'] = "English version";



$text['french']['site_title'] = "Site Internet GFI";
$text['french']['description'] = "Description";
$text['french']['client'] = "Client";
$text['french']['contact_name'] = "Contact";
$text['french']['start_at_the_latest'] = "Commencement au plus tard";
$text['french']['3minkey'] = "3 facteurs clés de succès";
$text['french']['date'] = "Date";
$text['french']['duration'] = "Durée";
$text['french']['location'] = "Localisation";
$text['french']['rate'] = "Prix";
$text['french']['Save_and_Share'] = "Sauvegarder et partager";
$text['french']['signin'] = "Connexion";
$text['french']['requirementslist'] = "Liste des Besoins";
$text['french']['logout'] = "Déconnexion";
$text['french']['problem'] = "Oups, Houston nous avons un problème!";
$text['french']['addrequirement'] = "Ajouter une expression de besoin";
$text['french']['langversion'] = "Version Française";
