<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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



/*
$files = getFilesOfRequirement(1);
foreach ($files as $aFile) {
    echo $aFile->name;
}

$keys = getKeysOfRequirement(1);
foreach ($keys as $aKey) {
    echo $aKey->successfactors;
}
*/

$aRequirement = new Requirement(NULL, "Test", "Description", NULL, NULL, 4, 2, "1234567", "1234567", 1234.9, "Win", 1, 1);
// $aRequirement->save();

$aRequirement->update(6, "Nouveau titre", "Nouvelle description", NULL, NULL, 6, 5, "6 Rue de la Gare, 59000 Lille, FRANCE", "12345, 12345", 3000.0, "Open", 1, 1);