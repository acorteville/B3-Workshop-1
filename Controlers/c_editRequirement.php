<?php
$isEditReq = true;
$requirement = getRequirementDetails($id);
$clients = getClients();
$keys = $requirement->getKeys();
$keys = $keys[0];
//var_dump($keys);
$contacts = getContacts($requirement->id_client);
$contact = $requirement->getConsultants();
require 'Views/v_addRequirement.php';

if( !empty($_POST))
{
   //var_dump($_POST); 
   $client = trim(addslashes ($_POST['client']));
   $contactname = trim(addslashes ($_POST['contactname'])); //@toDo 
   $title = trim(addslashes ($_POST['title']));
   $description = trim(addslashes ($_POST['description']));
   if(isset($_POST['3mainkey1']))
    $threeMainkey1 = trim(addslashes ($_POST['3mainkey1']));
    //var_dump($threeMainkey1);
   /*if(isset($_POST['3mainkey']))
    $threeMainkey2 = trim(addslashes ($_POST['3mainkey2']));
   if(isset($_POST['3mainkey']))
    $threeMainkey3 = trim(addslashes ($_POST['3mainkey3']));*/
   $datelastest = trim(addslashes ($_POST['datelastest']));
   $date = date('Y-m-d', strtotime(str_replace('-', '/', $datelastest)));
   $durationmonths = trim(addslashes ($_POST['durationmonths']));
   $durationdaysweek = trim(addslashes ($_POST['durationdaysweek']));
   $location = trim(addslashes ($_POST['location']));
   $rate = trim(addslashes ($_POST['rate']));
   $consultantname = trim(addslashes ($_POST['consultantname']));
   $statut = trim(addslashes ($_POST['statut']));
   $InputFile = isset($_POST['InputFile']) ? addslashes($_POST['InputFile']) : NULL;
   
   /**
    * array (size=15)
  'client' => string '1' (length=1)
  'contactname' => string '' (length=0)
  'title' => string '' (length=0)
  'description' => string '' (length=0)
  '3mainkey1' => string 'aaa' (length=3)
  '3mainkey2' => string '' (length=0)
  '3mainkey3' => string '' (length=0)
  'datelastest' => string '' (length=0)
  'durationmonths' => string '' (length=0)
  'durationdaysweek' => string '' (length=0)
  'location' => string '' (length=0)
  'rate' => string '' (length=0)
  'consultantname' => string '' (length=0)
  'statut' => string 'Open' (length=4)
  'InputFile' => string '' (length=0)*/

   try
   {
       $aRequirement = new Requirement(NULL, $title, $description, NULL, $date, $durationmonths, $durationdaysweek, $location, "", $rate, $statut, $client, $_SESSION['idSession'], $contactname);

       $id = $aRequirement->update(NULL, $title, $description, NULL, $date, $durationmonths, $durationdaysweek, $location, "", $rate, $statut, $client, $_SESSION['idSession'], $contactname);
       
       try {
           
          /* if (isset($threeMainkey1))
           {
                 $aKey = new Key($id, NULL, $threeMainkey1);
                 $aKey->update();
           } */
        /*   if (isset($threeMainkey2))
           {
                 $aKey = new Key($id, NULL, $threeMainkey2);
                 $aKey->save();
           }
           if (isset($threeMainkey2))
           {
                 $aKey = new Key($id, NULL, $threeMainkey2);
                 $aKey->save();
           }*/
       } catch (Exception $ex) {
           
       }
   } catch (Exception $ex) {

   }
}
else
{
    //var_dump($_POST); 
}