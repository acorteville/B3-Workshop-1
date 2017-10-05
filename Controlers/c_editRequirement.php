<?php
$isEditReq = true;
$requirement = getRequirementDetails($id);
$clients = getClients();
$keys = $requirement->getKeys();
$keys = $keys[0];
$contacts = getContacts($requirement->id_client);
$contact = $requirement->getConsultants();

$action = "edit-requirement-".$id.".html";

if(!empty($_POST)) {
    //var_dump($_POST); 
    $client = trim(addslashes ($_POST['client']));
    $contactname = trim(addslashes ($_POST['contactname'])); //@toDo 
    $title = trim(addslashes ($_POST['title']));
    $description = trim(addslashes ($_POST['description']));
    if(isset($_POST['3mainkey1']))
     $threeMainkey1 = trim(addslashes ($_POST['3mainkey1']));
    $datelastest = trim(addslashes ($_POST['datelastest']));
    $date = date('Y-m-d', strtotime(str_replace('-', '/', $datelastest)));
    $durationmonths = trim(addslashes ($_POST['durationmonths']));
    $durationdaysweek = trim(addslashes ($_POST['durationdaysweek']));
    $location = trim(addslashes ($_POST['location']));
    $rate = trim(addslashes ($_POST['rate']));
    $consultantname = trim(addslashes ($_POST['consultantname']));
    $statut = trim(addslashes ($_POST['statut']));
    $InputFile = isset($_POST['InputFile']) ? addslashes($_POST['InputFile']) : NULL;
   

    $aRequirement = new Requirement($id, $title, $description, NULL, $date, $durationmonths, $durationdaysweek, $location, "", $rate, $statut, $client, $_SESSION['idSession'], $contactname);    
    $id = $aRequirement->update($id, $title, $description, NULL, $date, $durationmonths, $durationdaysweek, $location, "", $rate, $statut, $client, $_SESSION['idSession'], $contactname);
    $requirement = $aRequirement;

}


var_dump($aRequirement);

require 'Views/v_addRequirement.php';
