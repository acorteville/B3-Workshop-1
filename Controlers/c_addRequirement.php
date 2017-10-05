<?php 
if( !empty($_POST))
{
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
   $consultantname = getConsultantByEmail(trim(addslashes ($_POST['consultantname'])));
   $statut = trim(addslashes ($_POST['statut']));
   $InputFile = isset($_POST['InputFile']) ? trim(addslashes($_POST['InputFile'])) : NULL;
   
  

   try
   {
       $aRequirement = new Requirement(NULL, $title, $description, NULL, $date, $durationmonths, $durationdaysweek, $location, "", $rate, $statut, $client, $_SESSION['idSession'], $contactname);       
       $id = $aRequirement->save();
       
       try {
           if (isset($threeMainkey1))
           {
                 $aKey = new Key($id, NULL, $threeMainkey1);
                 $aKey->save();
           }
       } catch (Exception $ex) {
           
       }
   } catch (Exception $ex) {

   }
}
$clients = getClients();

$action = "new-requirement.html";
require 'Views/v_addRequirement.php';