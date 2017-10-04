<?php 
if( !empty($_POST))
{
   var_dump($_POST); 
   $client = trim(addslashes ($_POST['client']));
   $contactname = trim(addslashes ($_POST['contactname']));
   $title = trim(addslashes ($_POST['title']));
   $description = trim(addslashes ($_POST['description']));
   if(isset($_POST['3mainkey']))
    $threeMainkey1 = trim(addslashes ($_POST['3mainkey1']));
   if(isset($_POST['3mainkey']))
    $threeMainkey2 = trim(addslashes ($_POST['3mainkey2']));
   if(isset($_POST['3mainkey']))
    $threeMainkey3 = trim(addslashes ($_POST['3mainkey3']));
   $datelastest = trim(addslashes ($_POST['datelastest']));
   $date = date('Y-m-d', strtotime(str_replace('-', '/', $datelastest)));
   $durationmonths = trim(addslashes ($_POST['durationmonths']));
   $location = trim(addslashes ($_POST['durationdaysweek']));
   $rate = trim(addslashes ($_POST['rate']));
   $consultantname = trim(addslashes ($_POST['consultantname']));
   $statut = trim(addslashes ($_POST['statut']));
   $InputFile = trim(addslashes ($_POST['InputFile']));
   
   $aRequirement = new Requirement(NULL, $title, $description, NULL, $date, $durationmonths, 2, "", "", $rate, $statut, $_SESSION['idSession'], 1);

       // Sauvegarde d'un besoin
       $aRequirement->save();
   try
   {
       
       
       try {
           if (isset($threeMainkey1))
           {
                // Création d'une clé
                // $aKey = new Key(6, NULL, "Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.");

                // Sauvegarde d'une clé
                // $aKey->save();
           }
       } catch (Exception $ex) {
           
       }
   } catch (Exception $ex) {

   }
}
else
{
    //var_dump($_POST); 
}
$clients = getClients();
require 'Views/v_addRequirement.php';

// Création d'un besoin
// $aRequirement = new Requirement(NULL, "Test", "Description", NULL, NULL, 4, 2, "1234567", "1234567", 1234.9, "Win", 1, 1);

// Sauvegarde d'un besoin
// // $aRequirement->save();

// Mise à jour d'un besoin
// $aRequirement->update(6, "Nouveau titre", "Nouvelle description", NULL, NULL, 6, 5, "6 Rue de la Gare, 59000 Lille, FRANCE", "12345, 12345", 3000.0, "Open", 1, 1);


// Création d'une clé
// $aKey = new Key(6, NULL, "Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.");

// Sauvegarde d'une clé
// $aKey->save();

// Mise à jour d'une clé
// $aKey->update(3, 6, "test 2");

